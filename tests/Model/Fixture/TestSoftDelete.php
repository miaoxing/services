<?php

namespace MiaoxingTest\Services\Model\Fixture;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Services\Model\SoftDeleteTrait;

/**
 * @property string id
 * @property string deleted_at
 */
class TestSoftDelete extends BaseModelV2
{
    use SoftDeleteTrait;
}
