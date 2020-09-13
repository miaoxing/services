<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\ShowAction;

trait ItemGetTrait
{
    public function get()
    {
        return ShowAction::exec($this);
    }
}
