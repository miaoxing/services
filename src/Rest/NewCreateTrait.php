<?php

namespace Miaoxing\Services\Rest;

use Miaoxing\Services\Service\Request;

trait NewCreateTrait
{
    public function newAction(Request $req)
    {
        return $this->editAction($req);
    }

    public function createAction(Request $req)
    {
        return $this->updateAction($req);
    }
}
