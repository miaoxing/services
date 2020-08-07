<?php

namespace Miaoxing\Services\Action;

use Miaoxing\Services\Service\IndexAction;

trait IndexTrait
{
    public function indexAction()
    {
        return IndexAction::exec($this);
    }
}
