<?php

namespace Miaoxing\Services\Action;

use Miaoxing\Services\Service\EditAction;
use Miaoxing\Services\Service\UpdateAction;

trait EditUpdateTrait
{
    public function editAction()
    {
        return EditAction::exec($this);
    }

    public function updateAction()
    {
        return UpdateAction::exec($this);
    }
}
