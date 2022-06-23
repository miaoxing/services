<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Wei\Migration;

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
    }

    protected function configure()
    {
        $this->setDescription('Rollback and run again the last migration or to the specified target migration ID')
            ->addArgument('target', InputArgument::OPTIONAL, 'Stop until the specified target migration ID');
    }
}
