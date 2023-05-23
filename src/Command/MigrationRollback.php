<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
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
        Migration::setOutput($this->output)->rollback([
            'target' => $this->getArgument('target'),
            'only' => $this->getOption('only'),
        ]);
    }

    protected function configure()
    {
        $this->setDescription('Rollback the last migration or to the specified target migration ID')
            ->addArgument('target', InputArgument::OPTIONAL, 'Stop until the specified target migration ID')
            ->addOption('only', 'o', InputOption::VALUE_NONE, 'Whether only rollback the specified migration ID');
    }
}
