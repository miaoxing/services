<?php

namespace MiaoxingTest\Services\Service;

use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Services\Service\Url;
use Wei\Req;

class UrlTest extends BaseTestCase
{
    /**
     * @param array $options
     * @param string $to
     * @param array $argOrParams
     * @param array $params
     * @param string $result
     * @dataProvider providerForAppId
     */
    public function testAppId(array $options, string $to, array $argOrParams, array $params, string $result)
    {
        $req = new Req(['wei' => $this->wei, 'fromGlobal' => false] + $options);
        $url = new Url(['wei' => $this->wei, 'req' => $req, 'passThroughParams' => ['appId']]);

        $this->assertSame($result, $url->to($to, $argOrParams, $params));
    }

    public static function providerForAppId(): array
    {
        return [
            // defaultUrlRewrite=true
            [
                [
                    'defaultUrlRewrite' => true,
                    'gets' => [
                        'appId' => 2,
                    ],
                ],
                'users',
                [],
                [],
                '/users?appId=2',
            ],
            [
                [
                    'defaultUrlRewrite' => true,
                    'gets' => [
                        'test' => 't',
                        'appId' => 2,
                    ],
                ],
                'users',
                [
                    'id' => 'twin',
                ],
                [],
                '/users?id=twin&appId=2',
            ],
            [
                [
                    'defaultUrlRewrite' => true,
                    'gets' => [
                        'test' => 't',
                        'appId' => 2,
                    ],
                ],
                'users/%s',
                [1],
                [],
                '/users/1?appId=2',
            ],
            [
                [
                    'defaultUrlRewrite' => true,
                    'gets' => [
                        'test' => 't',
                        'appId' => 2,
                    ],
                ],
                'users/%s',
                [1],
                [
                    'key' => 'value',
                ],
                '/users/1?key=value&appId=2',
            ],
            [
                [
                    'defaultUrlRewrite' => true,
                    'gets' => [
                        'appId' => 2,
                    ],
                ],
                'users',
                [
                    'appId' => '3',
                ],
                [],
                '/users?appId=3',
            ],
            [
                [
                    'defaultUrlRewrite' => true,
                    'gets' => [
                        'appId' => 2,
                    ],
                ],
                'users/%s',
                [1],
                [
                    'key' => 'value',
                    'appId' => 3,
                ],
                '/users/1?key=value&appId=3',
            ],
            // defaultUrlRewrite=false
            [
                [
                    'defaultUrlRewrite' => false,
                    'gets' => [
                        'appId' => 2,
                    ],
                ],
                'users',
                [],
                [],
                '/?r=users&appId=2',
            ],
            [
                [
                    'defaultUrlRewrite' => false,
                    'gets' => [
                        'test' => 't',
                        'appId' => 2,
                    ],
                ],
                'users',
                [
                    'id' => 'twin',
                ],
                [],
                '/?r=users&id=twin&appId=2',
            ],
            [
                [
                    'defaultUrlRewrite' => false,
                    'gets' => [
                        'test' => 't',
                        'appId' => 2,
                    ],
                ],
                'users/%s',
                [1],
                [],
                '/?r=users%2F1&appId=2',
            ],
            [
                [
                    'defaultUrlRewrite' => false,
                    'gets' => [
                        'test' => 't',
                        'appId' => 2,
                    ],
                ],
                'users/%s',
                [1],
                [
                    'key' => 'value',
                ],
                '/?r=users%2F1&key=value&appId=2',
            ],
        ];
    }
}
