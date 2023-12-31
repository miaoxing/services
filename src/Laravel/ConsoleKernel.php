<?php

namespace Miaoxing\Services\Laravel;

use Illuminate\Console\Application as Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel;
use Miaoxing\Plugin\Service\Config;
use Symfony\Component\Console\Command\Command;

class ConsoleKernel extends Kernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
    ];

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        Config::preloadGlobal();
        wei()->event->trigger('schedule', [$schedule]);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     * @throws \ReflectionException
     * @throws \Exception
     */
    protected function commands()
    {
        $paths = [
            'plugins/*/src',
        ];

        $classes = wei()->classMap->generate($paths, '/Command/*.php', 'Command');

        foreach ($classes as $name => $command) {
            if (
                is_subclass_of($command, Command::class)
                && !(new \ReflectionClass($command))->isAbstract()
            ) {
                Artisan::starting(static function (Artisan $artisan) use ($command) {
                    $artisan->resolve($command);
                });
            }
        }
    }
}
