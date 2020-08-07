<?php

namespace Miaoxing\Services\Action;

use Miaoxing\Services\Service\DestroyAction;

trait DestroyTrait
{
    public function destroyAction()
    {
        return DestroyAction::exec($this);
    }
}
