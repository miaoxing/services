<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\ShowAction;

/**
 * @property array $expand The relations to return with model
 */
trait ItemGetTrait
{
    public function get()
    {
        return ShowAction::exec($this);
    }
}
