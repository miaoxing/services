<?php

namespace Miaoxing\Services\Service;

trait StaticTrait
{
    /**
     * Whether to check if the service method exists
     *
     * @var bool
     */
    protected static $checkServiceMethod = false;

    /**
     * @param string $method
     * @return bool
     * @throws \ReflectionException
     * @noinspection UselessReturnInspection
     */
    protected static function isServiceMethod(string $method): bool
    {
        static $cache = [];
        $exists = &$cache[static::class][$method];

        if (isset($exists)) {
            return $exists;
        }

        if (!method_exists(static::class, $method)) {
            return $exists = false;
        }

        $ref = new \ReflectionMethod(static::class, $method);
        if (!$ref->isProtected()) {
            return $exists = false;
        }

        return $exists = strpos($ref->getDocComment(), "* @api\n") !== false;
    }

    /**
     * Call a service api method
     *
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws \ReflectionException
     */
    public function __call($method, $args)
    {
        if (static::$checkServiceMethod) {
            if (static::isServiceMethod($method)) {
                return $this->$method(...$args);
            }
        } elseif (method_exists($this, $method)) {
            return $this->$method(...$args);
        }

        return call_user_func_array($this->$method, $args);
    }

    /**
     * Call a service method through static call
     *
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws \ReflectionException
     */
    public static function __callStatic(string $method, array $args)
    {
        if (static::$checkServiceMethod && !static::isServiceMethod($method)) {
            throw new \BadMethodCallException(sprintf('Service method "%s" not found', $method));
        }

        if (isset(static::$createNewInstance) && static::$createNewInstance) {
            $instance = static::newInstance();
        } else {
            $instance = wei()->get(static::getServiceName());
        }
        return $instance->$method(...$args);
    }

    /**
     * Initialize a new instance of current service
     *
     * @param array $options
     * @return static
     */
    public static function newInstance($options = [])
    {
        return new static($options);
    }

    /**
     * Receive the base name of current class
     *
     * @return string
     */
    protected static function getServiceName()
    {
        $parts = explode('\\', static::class);
        return lcfirst(end($parts));
    }
}
