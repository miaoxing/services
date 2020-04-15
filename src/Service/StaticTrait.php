<?php

namespace Miaoxing\Services\Service;

use ReflectionException;

/**
 * @mixin \WeiMixin
 */
trait StaticTrait
{
    /**
     * Call a service method
     *
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws ReflectionException
     */
    public function __call($method, $args)
    {
        return $this->wei->caller($this, $method)(...$args);
    }

    /**
     * Call a service method through static call
     *
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws ReflectionException
     */
    public static function __callStatic(string $method, array $args)
    {
        return Wei::staticCaller(static::class, $method)(...$args);
    }
}
