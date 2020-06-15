<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Wei\Migration;

class MigrationCreate extends BaseCommand
{
    /**
     * Execute the console command.
     *
     * @return void
     * @throws \ReflectionException
     */
    public function handle()
    {
        Migration::setOutput($this->output)->create($this->getArguments() + $this->getOptions());
    }

    protected function configure()
    {
        $this->setDescription('Create a new migration class')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the migration')
            ->addOption('path', null, InputOption::VALUE_OPTIONAL, 'The path to save the migration file', 'src/Migration')
            ->addOption('namespace', null, InputOption::VALUE_OPTIONAL, 'The namespace of the migration class');
    }
}
