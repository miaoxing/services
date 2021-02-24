<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Services\Action\BaseAction;
use Wei\Req;

class IndexAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        // 1. 构建查询
        $models = $this->convention->createModel($controller);
        $models->setReq($this->req);

        $this->triggerRet('beforeFind', [$models, $this->req]);

        $this->triggerRet('beforeReqQuery', [$models, $this->req]);
        $models->reqQuery();
        $this->triggerRet('afterReqQuery', [$models, $this->req]);

        $models->all();
        $this->trigger('afterFind', [$models, $this->req]);

        // 2. 组装返回数据
        $data = [];
        /** @var BaseModel $model */
        foreach ($models as $model) {
            $data[] = array_merge($model->toArray(), $this->triggerBuildData($model));
        }

        return $this->triggerBuildRet($models->toRet(['data' => $data]), $models, $this->req);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function beforeReqQuery(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function afterReqQuery(callable $callable)
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

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function buildRet(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    protected function triggerBuildData($model)
    {
        return $this->trigger('buildData', [$model]) ?: [];
    }

    protected function triggerBuildRet($ret, BaseModel $models, Req $req)
    {
        return $this->trigger('buildRet', [$ret, $models, $req]) ?: $ret;
    }
}
