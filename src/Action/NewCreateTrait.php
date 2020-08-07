<?php

namespace Miaoxing\Services\Action;

use Miaoxing\Services\Service\CreateAction;
use Miaoxing\Services\Service\NewAction;

trait NewCreateTrait
{
    public function newAction()
    {
        return NewAction::exec($this);
    }

    public function createAction()
    {
        return CreateAction::exec($this);
    }
}
