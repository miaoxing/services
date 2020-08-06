<?php

namespace Miaoxing\Services\Rest;

use Wei\Req;

trait NewCreateTrait
{
    public function newAction(Req $req)
    {
        return $this->editAction($req);
    }

    public function createAction(Req $req)
    {
        return $this->updateAction($req);
    }
}
