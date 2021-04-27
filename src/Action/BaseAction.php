<?php

namespace Miaoxing\Services\Action;

use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\HandleRetTrait;
use Wei\Req;

/**
 * @mixin \ConventionMixin
 * @mixin \ReqMixin
 * @mixin \ResMixin
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
