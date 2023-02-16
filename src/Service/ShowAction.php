<?php

namespace Miaoxing\Services\Service;

use Exception;
use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Services\Action\BaseAction;
use Wei\Ret;

class ShowAction extends BaseAction
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

        $model->findOrFail($this->req['id']);

        $this->triggerRet('afterFind', [$model, $this->req]);

        $this->includeModel($controller, $model);

        return $model->toRet([
            'data' => array_merge($model->toArray(), $this->triggerBuildData($model)),
        ]);
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
    protected function afterFind(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function buildData(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    private function triggerBuildData($model)
    {
        return $this->trigger('buildData', [$model]) ?: [];
    }

    private function includeModel(BaseController $controller, BaseModel $model)
    {
        $model->load($controller->getOption('include'));
    }
}
