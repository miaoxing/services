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
use Miaoxing\Plugin\BaseService;
use Illuminate\Support\Facades\Facade;
use Miaoxing\Services\Laravel\ConsoleKernel;
use Miaoxing\Services\Laravel\ConsoleSupportServiceProvider;
use Miaoxing\Services\Laravel\HttpKernel;
use Miaoxing\Queue\Service\Queue;
use Wei\Db;

/**
 * @property Db db
 * @property Queue queue
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

        if ('cli' === php_sapi_name()) {
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
        $app = $this->getApp();

        $app->register(ConsoleSupportServiceProvider::class);

        /** @var ConsoleKernel $kernel */
        $kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
        $kernel->bootstrap();
    }

    protected function shareConfig()
    {
        $app = $this->getApp();

        // Database
        /** @var Repository $config */
        $config = $app['config'];

        $config->set([
            'logging' => [
                'default' => 'daily',
                'channels' => [
                    'daily' => [
                        'driver' => 'daily',
                        'path' => storage_path('logs/laravel.log'),
                        'level' => 'debug',
                        'days' => 14,
                    ],
                ],
            ],
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
        $app->extend(RedisManager::class, function (RedisManager $manager) {
            $manager->extend('phpredis', function () {
                return new class extends PhpRedisConnector {
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
