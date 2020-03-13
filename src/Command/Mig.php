<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Miaoxing\Services\Service\Migration;

class Mig extends BaseCommand
{
    protected function configure()
    {
        $this->setDescription('Run the migrations');
    }

    /**
     * @inheritDoc
     */
    public function handle()
    {
        Migration::setOutput($this->output)->migrate();
    }
}
