<?php

namespace Miaoxing\Services\Service;

use Illuminate\Config\Repository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\MySqlConnection;
use Illuminate\Foundation\Application;
use Illuminate\Queue\QueueManager;
use Illuminate\Redis\Connections\PhpRedisConnection;
use Illuminate\Redis\Connectors\PhpRedisConnector;
use Illuminate\Redis\RedisManager;
use Illuminate\Support\Facades\Facade;
use Miaoxing\Plugin\BaseService;
use Miaoxing\Services\Laravel\ConsoleKernel;
use Miaoxing\Services\Laravel\ConsoleSupportServiceProvider;
use Miaoxing\Services\Laravel\HttpKernel;

/**
 * @mixin \DbMixin
 * @mixin \QueueMixin
 * @mixin \LoggerMixin
 * @mixin \ConfigMixin
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Laravel extends BaseService
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @var bool
     */
    protected $bootstrapped = false;

    /**
     * Bootstrap Laravel application
     *
     * @return $this
     * @svc
     */
    protected function bootstrap()
    {
        if ($this->bootstrapped) {
            return $this;
        }
        $this->bootstrapped = true;

        if ('cli' === \PHP_SAPI) {
            $this->bootstrapConsole();
        } else {
            $this->bootstrapHttp();
        }

        $this->shareConfig();
        return $this;
    }

    /**
     * @return Application
     * @svc
     */
    protected function getApp()
    {
        if (!$this->app) {
            $this->app = $this->createApp();
        }
        return $this->app;
    }

    protected function createApp()
    {
        $app = new Application(realpath('.'));

        $app->singleton(\Illuminate\Contracts\Http\Kernel::class, HttpKernel::class);
        $app->singleton(\Illuminate\Contracts\Console\Kernel::class, ConsoleKernel::class);
        $app->singleton(
            \Illuminate\Contracts\Debug\ExceptionHandler::class,
            \Illuminate\Foundation\Exceptions\Handler::class
        );

        return $app;
    }

    protected function bootstrapHttp()
    {
        $app = $this->getApp();

        /** @var \Illuminate\Foundation\Http\Kernel $kernel */
        $kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

        $request = new \Illuminate\Http\Request();
        $app->instance('request', $request);
        Facade::clearResolvedInstance('request');

        $kernel->bootstrap();
    }

    protected function bootstrapConsole()
    {
        $this->config->preloadGlobal();

        $app = $this->getApp();

        $app->register(ConsoleSupportServiceProvider::class);

        /** @var ConsoleKernel $kernel */
        $kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
        $kernel->bootstrap();
    }

    protected function shareConfig()
    {
        $app = $this->getApp();

        // Logger
        $app['log'] = $this->logger;

        // Database
        /** @var Repository $config */
        $config = $app['config'];

        $config->set([
            'cache' => [
                'default' => 'file',
                'stores' => [
                    'file' => [
                        'driver' => 'file',
                        'path' => storage_path('framework/cache/data'),
                    ],
                ],
            ],
            'database' => [
                'default' => 'mysql',
                'connections' => [
                    'mysql' => [],
                ],
                'redis' => [
                    'default' => [],
                ],
            ],
        ]);

        $app->extend(DatabaseManager::class, function (DatabaseManager $manager) {
            $manager->extend('mysql', function () {
                return new MySqlConnection($this->db->getPdo(), $this->db->getDbname(), $this->db->getTablePrefix());
            });
            return $manager;
        });
        $app->extend(RedisManager::class, static function (RedisManager $manager) {
            $manager->extend('phpredis', static function () {
                return new class () extends PhpRedisConnector {
                    public function connect(array $config, array $options)
                    {
                        return new PhpRedisConnection(wei()->redis->getObject());
                    }
                };
            });
            return $manager;
        });

        // Queue
        $app->afterResolving(QueueManager::class, function () {
            $this->queue->setConfig();
        });
    }
}
