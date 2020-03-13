<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Miaoxing\Services\Service\Migration;

class MigrationStatus extends BaseCommand
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'mig:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Output the migration status table';

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
