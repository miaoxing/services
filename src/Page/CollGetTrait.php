<?php

namespace Miaoxing\Services\Page;

use Miaoxing\Services\Service\IndexAction;

/**
 * @property string[] $expand The relations to return with models
 */
trait CollGetTrait
{
    public function get()
    {
        return IndexAction::exec($this);
    }
}
