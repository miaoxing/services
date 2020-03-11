<?php

namespace Miaoxing\Services\Command;

use Illuminate\Console\Command;
use Miaoxing\Services\Service\Migration;

class MigCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'mig';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the migrations';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Migration::setOutput($this->output)->migrate();
    }
}
