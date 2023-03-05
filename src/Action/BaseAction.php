<?php

namespace Miaoxing\Services\Action;

use ConventionMixin;
use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\HandleRetTrait;
use ReqMixin;
use ResMixin;
use Wei\BaseController;
use Wei\Req;
use Wei\Wei;

/**
 * @mixin ConventionMixin
 * @mixin ReqMixin
 * @mixin ResMixin
 */
abstract class BaseAction extends BaseService
{
    use HandleRetTrait;

    protected static $createNewInstance = true;

    /**
     * @var array
     */
    private $events;

    /**
     * @param BaseController $controller
     * @return mixed
     * @svc
     */
    abstract protected function exec(BaseController $controller);

    /**
     * Create a new instance
     *
     * @return static
     */
    public static function new(): self
    {
        return Wei::getContainer()->getBy(static::class);
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @svc
     */
    protected function setReq(Req $req)
    {
        $this->req = $req;
        return $this;
    }

    protected function on(string $name, callable $callable)
    {
        $this->events[$name] = $callable;
        return $this;
    }

    protected function trigger($name, $args)
    {
        if (isset($this->events[$name])) {
            return $this->events[$name](...$args);
        }
    }

    protected function triggerRet($name, $args)
    {
        $ret = $this->trigger($name, $args);
        if ($ret) {
            $this->tie($ret);
        }
        return $ret;
    }
}
