<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Miaoxing\Services\Service\Migration;

class MigrationRun extends BaseCommand
{
    protected function configure()
    {
        $this->setDescription('Run the migrations')
            ->setAliases(['migrate']);
    }

    /**
     * @inheritDoc
     */
    public function handle()
    {
        Migration::setOutput($this->output)->migrate();
    }
}
