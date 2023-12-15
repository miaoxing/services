<?php

namespace MiaoxingTest\Services\Service;

use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Services\Service\IndexAction;

class IndexActionTest extends BaseTestCase
{
    public function testCreateNewInstance()
    {
        $index = IndexAction::afterFind(static function () {
        });

        $index2 = IndexAction::afterFind(static function () {
        });

        $this->assertNotSame($index, $index2);
    }
}
