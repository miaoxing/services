<?php

namespace MiaoxingTest\Services\Model\Fixture;

use Miaoxing\Plugin\BaseModelV2;

class TestReqQuery extends BaseModelV2
{
    public function detail()
    {
        return $this->hasOne(wei()->testReqQueryDetail());
    }
}
