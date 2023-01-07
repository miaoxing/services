<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Wei\Migration;
use Wei\Str;

class MigrationRedo extends BaseCommand
{
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $migration = Migration::setOutput($this->output);

        $migration->rollback();

        $migration->migrate();

        /** @experimental */
        $classes = call_user_func([$migration, 'getMigrationClasses']);
        $last = end($classes);
        $pluginId = Str::dash(explode('\\', $last)[1]);
        $this->runCommand('g:metadata', ['plugin-id' => $pluginId]);
    }

    protected function configure()
    {
        $this->setDescription('Rollback and run again the last migration or to the specified target migration ID')
            ->addArgument('target', InputArgument::OPTIONAL, 'Stop until the specified target migration ID');
    }
}
