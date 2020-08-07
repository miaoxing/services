<?php

namespace Miaoxing\Services\Action;

use Miaoxing\Services\Service\ShowAction;

trait ShowTrait
{
    public function showAction()
    {
        return ShowAction::exec($this);
    }
}
