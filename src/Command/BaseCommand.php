<?php

namespace Miaoxing\Services\Command;

use Illuminate\Console\Command;

abstract class BaseCommand extends Command
{
    /**
     * Get all arguments and options
     *
     * @return array
     */
    public function params()
    {
        return $this->input->getArguments() + $this->input->getOptions();
    }

    /**
     * Writes a success or error message to the output
     *
     * @param array $ret
     */
    protected function writeRet(array $ret)
    {
        $style = $ret['code'] === 1 ? 'info' : 'error';
        $this->output->writeln('<' . $style . '>' . $ret['message'] . '</' . $style . '>');
    }
}
