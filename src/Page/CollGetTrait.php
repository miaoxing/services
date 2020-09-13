<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\IndexAction;

trait CollGetTrait
{
    public function get()
    {
        return IndexAction::exec($this);
    }
}
