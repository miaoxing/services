<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\RetException;
use Miaoxing\Services\Action\BaseAction;

class DestroyAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        $model = $this->convention->createModel($controller)->findOrFail($this->req['id']);

        $this->triggerRet('beforeDestroy', [$model, $this->req]);

        $model->destroy();

        $this->trigger('afterDestroy', [$model, $this->req]);

        return $model->toRet();
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function beforeDestroy(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function afterDestroy(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }
}
