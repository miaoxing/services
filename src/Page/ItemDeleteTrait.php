<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\DestroyAction;

trait ItemDeleteTrait
{
    public function delete()
    {
        return DestroyAction::exec($this);
    }
}
