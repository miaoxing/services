<?php

namespace MiaoxingTest\Services\Service;

use Miaoxing\Plugin\Service\User;
use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * @mixin \ConventionMixin
 */
final class ConventionTest extends BaseTestCase
{
    public function testGetModelFromService()
    {
        $this->assertSame('user', $this->convention->getModelName(User::cur()));
    }

    /**
     * @param object $object
     * @dataProvider providerForGetModelNameFromPageObject
     */
    public function testGetModelNameFromPageObject(object $object)
    {
        $this->assertSame('service', $this->convention->getModelName($object));
    }

    public function providerForGetModelNameFromPageObject()
    {
        return [
            [
                require __DIR__ . '/../Fixture/pages/services/index.php',
            ],
            [
                require __DIR__ . '/../Fixture/pages/services/[id].php',
            ],
            [
                require __DIR__ . '/../Fixture/pages/services/[id]/action.php',
            ],
        ];
    }
}
