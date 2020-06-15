<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Wei\Migration;

class MigrationStatus extends BaseCommand
{
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Migration::setOutput($this->output)->status();
    }

    protected function configure()
    {
        $this->setDescription('Output the migration status table');
    }
}
