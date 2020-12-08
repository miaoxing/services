<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Services\Action\BaseAction;

class ShowAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return array|mixed
     * @throws \Exception
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        $model = $this->convention->createModel($controller);

        $this->triggerRet('beforeFind', [$model, $this->req]);

        $model->findOrFail($this->req['id']);

        $this->triggerRet('afterFind', [$model, $this->req]);

        $this->expandModel($controller, $model);

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

    private function expandModel(BaseController $controller, BaseModel $model)
    {
        foreach ((array) $controller->getOption('expand') as $expand) {
            $model->{$expand};
        }
    }
}
