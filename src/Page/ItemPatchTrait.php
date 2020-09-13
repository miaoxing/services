<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\UpdateAction;

trait ItemPatchTrait
{
    public function patch()
    {
        return UpdateAction::exec($this);
    }
}
