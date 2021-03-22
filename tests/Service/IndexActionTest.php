<?php

namespace MiaoxingTest\Services\Service;

use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Services\Service\IndexAction;

class IndexActionTest extends BaseTestCase
{
    public function testCreateNewInstance()
    {
        $index = IndexAction::afterFind(function () {
        });

        $index2 = IndexAction::afterFind(function () {
        });

        $this->assertNotSame($index, $index2);
    }
}
