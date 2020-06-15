<?php

namespace MiaoxingTest\Services\Service;

use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * @internal
 */
final class PageTest extends BaseTestCase
{
    public function testTitle()
    {
        wei()->page->setTitle('title');

        $this->assertSame('title', wei()->page->getTitle());
    }
}
