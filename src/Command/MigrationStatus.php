<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Miaoxing\Services\Service\Migration;

class MigrationStatus extends BaseCommand
{
    protected function configure()
    {
        $this->setDescription('Output the migration status table');
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Migration::setOutput($this->output)->status();
    }
}
