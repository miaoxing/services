<?php

namespace Miaoxing\Services\Service;

trait StaticTrait
{
    /**
     * Call a service api method
     *
     * @param string $method
     * @param array $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        // todo limit to api/non-private methods
        if (method_exists($this, $method)) {
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
     */
    public static function __callStatic(string $method, array $args)
    {
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
     * Receive the service name of current class
     *
     * @return string
     */
    protected static function getServiceName()
    {
        return lcfirst(class_basename(get_called_class()));
    }
}
