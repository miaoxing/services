<?php

namespace Miaoxing\Services\Service;

use Exception;
use Miaoxing\Plugin\BaseController;
use Miaoxing\Services\Action\BaseAction;
use Wei\Ret;

class UpdateAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return Ret
     * @throws Exception
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        $model = $this->convention->createModel($controller);

        $this->triggerRet('beforeFind', [$model, $this->req]);
        $model->findFromReq($this->req);
        $this->triggerRet('afterFind', [$model, $this->req]);

        $ret = $this->triggerRet('validate', [$model, $this->req]);
        $data = $ret['data'] ?? $this->req;
        $model->fromArray($data);

        $this->triggerRet('beforeSave', [$model, $this->req]);
        $model->save();
        $this->trigger('afterSave', [$model, $this->req]);

        return $model->toRet();
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
     * @param callable $callable
     * @return $this
     */
    public function validate(callable $callable): self
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function beforeFind(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function beforeSave(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function afterSave(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }
}
