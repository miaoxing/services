<?php

namespace Miaoxing\Services\Rest;

use Miaoxing\Services\Crud\EditUpdateTrait;
use Miaoxing\Services\Crud\IndexTrait;

trait RestTrait
{
    use IndexTrait;
    use NewCreateTrait;
    use EditUpdateTrait;
}
