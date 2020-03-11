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
use Miaoxing\Services\Laravel\HttpKernel;
use Miaoxing\Queue\Service\Queue;
use Wei\Db;

/**
 * @property Db db
 * @property Queue queue
 */
class Laravel extends BaseService
{
    use StaticTrait;

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
     * @api
     */
    protected function bootstrap()
    {
        if ($this->bootstrapped) {
            return $this;
        }
        $this->bootstrapped = true;

        if (php_sapi_name() === 'cli') {
            $this->bootstrapConsole();
        } else {
            $this->bootstrapHttp();
        }

        $this->shareConfig();
        return $this;
    }

    /**
     * @return Application
     * @api
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
        $app = new Application($_ENV['APP_BASE_PATH'] ?? realpath('.'));

        $app->singleton(\Illuminate\Contracts\Http\Kernel::class, HttpKernel::class);
        $app->singleton(\Illuminate\Contracts\Console\Kernel::class, ConsoleKernel::class);
        $app->singleton(\Illuminate\Contracts\Debug\ExceptionHandler::class,
            \Illuminate\Foundation\Exceptions\Handler::class);

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
        $config->set('database', [
            'default' => 'mysql',
            'connections' => [
                'mysql' => [],
            ],
            'redis' => [
                'default' => [],
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
                return new class extends PhpRedisConnector
                {
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
