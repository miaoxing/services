<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\RetException;
use Miaoxing\Services\Action\BaseAction;

class UpdateAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        $model = $this->convention->createModel($controller);

        $this->triggerRet('beforeFind', [$model, $this->req]);

        $model->findFromReq($this->req)
            ->fromArray($this->req);

        $this->triggerRet('beforeSave', [$model, $this->req]);

        $model->save();

        $this->trigger('afterSave', [$model, $this->req]);

        return $model->toRet();
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
