<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Services\Action\BaseAction;
use Wei\BaseController;
use Wei\Ret;

class DestroyAction extends BaseAction
{
    /**
     * @param callable $callable
     * @return $this
     */
    public function beforeFind(callable $callable): self
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     */
    public function afterFind(callable $callable): self
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param BaseController $controller
     * @return Ret
     * @throws \Exception
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        $model = $this->convention->createModel($controller);

        $this->triggerRet('beforeFind', [$model, $this->req]);
        $model->findOrFail($this->req['id']);
        $this->triggerRet('afterFind', [$model, $this->req]);

        $this->triggerRet('beforeDestroy', [$model, $this->req]);

        // @experimental
        if (method_exists($model, 'checkDestroy')) {
            $ret = $model->checkDestroy();
            if ($ret->isErr()) {
                return $ret;
            }
        }

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
