<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Wei\Migration;

class MigrationRollback extends BaseCommand
{
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Migration::setOutput($this->output)->rollback($this->getArguments());
    }

    protected function configure()
    {
        $this->setDescription('Rollback the last migration or to the specified target migration ID')
            ->addArgument('target', InputArgument::OPTIONAL, 'Stop until the specified target migration ID');
    }
}
