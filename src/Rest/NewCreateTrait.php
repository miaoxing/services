<?php

namespace Miaoxing\Services\Rest;

trait NewCreateTrait
{
    public function newAction()
    {
        return $this->editAction();
    }

    public function createAction()
    {
        return $this->updateAction();
    }
}
