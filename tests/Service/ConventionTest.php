<?php

namespace MiaoxingTest\Services\Service;

use Miaoxing\Plugin\Service\UserModel;
use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * @mixin \ConventionMixin
 */
final class ConventionTest extends BaseTestCase
{
    public function testGetModelFromService()
    {
        $this->assertSame('userModel', $this->convention->getModelName(UserModel::new()));
    }

    /**
     * @param string $name
     * @param object $object
     * @dataProvider providerForGetModelNameFromPageObject
     */
    public function testGetModelNameFromPageObject(string $name, object $object)
    {
        $this->assertSame($name, $this->convention->getModelName($object));
    }

    public function providerForGetModelNameFromPageObject()
    {
        return [
            [
                'service',
                require __DIR__ . '/../Fixture/pages/services/index.php',
            ],
            [
                'service',
                require __DIR__ . '/../Fixture/pages/services/[id].php',
            ],
            [
                'service',
                require __DIR__ . '/../Fixture/pages/services/[id]/action.php',
            ],
            [
                'serviceItem',
                require __DIR__ . '/../Fixture/pages/service-items/index.php',
            ],
        ];
    }
}
