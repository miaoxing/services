<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\CreateAction;

trait CollPostTrait
{
    public function post()
    {
        return CreateAction::exec($this);
    }
}
