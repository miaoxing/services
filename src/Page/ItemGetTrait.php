<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\ShowAction;

/**
 * @property string[] $include The relations to return with model
 */
trait ItemGetTrait
{
    public function get()
    {
        return ShowAction::exec($this);
    }
}
