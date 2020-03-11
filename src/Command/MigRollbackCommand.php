<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Services\Service\Migration;

class MigRollbackCommand extends BaseCommand
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'mig:rollback {target? : Stop until the specified target migration ID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback the last migration or to the specified target migration ID';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Migration::setOutput($this->output)->rollback($this->params());
    }
}
