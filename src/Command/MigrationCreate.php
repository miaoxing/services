<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Miaoxing\Services\Service\Migration;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class MigrationCreate extends BaseCommand
{
    protected function configure()
    {
        $this->setDescription('Create a new migration class')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the migration')
            ->addOption('path', null, InputOption::VALUE_OPTIONAL, 'The path to save the migration file', 'src/Migration')
            ->addOption('namespace', null, InputOption::VALUE_OPTIONAL, 'The namespace of the migration class');
    }

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
}