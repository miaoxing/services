<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\DefaultsAction;

trait DefaultsTrait
{
    public function get()
    {
        return DefaultsAction::exec($this);
    }
}
