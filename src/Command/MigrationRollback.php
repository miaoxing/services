<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Wei\Migration;
use Symfony\Component\Console\Input\InputArgument;

class MigrationRollback extends BaseCommand
{
    protected function configure()
    {
        $this->setDescription('Rollback the last migration or to the specified target migration ID')
            ->addArgument('target', InputArgument::OPTIONAL, 'Stop until the specified target migration ID');
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Migration::setOutput($this->output)->rollback($this->getArguments());
    }
}
