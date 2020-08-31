<?php

namespace Miaoxing\Services\Page;

use Wei\Req;
use Wei\Res;

trait PostToPatchTrait
{
    public function post(Req $req, Res $res)
    {
        $ref = new \ReflectionClass($this);
        return (require dirname($ref->getFileName()) . '/[id].php')->patch($req, $res);
    }
}
