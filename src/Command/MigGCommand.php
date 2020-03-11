<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Services\Service\Migration;

class MigGCommand extends BaseCommand
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'mig:g {name : The name of the migration} 
        {plugin? : The name of the plugin}
        {--path= : The path to save the migration file}
        {--namespace= : The namespace of the migration class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new migration class';

    /**
     * Execute the console command.
     *
     * @return void
     * @throws \ReflectionException
     */
    public function handle()
    {
        Migration::setOutput($this->output)::create($this->params());
    }
}
