<?php

namespace Miaoxing\Services\Rest;

use Miaoxing\Plugin\Service\Model;
use Miaoxing\Services\Service\Convention;
use Wei\Request;

/**
 * @property Convention $convention
 */
trait IndexTrait
{
    public function indexAction(Request $req)
    {
        // 1. 构建查询
        $models = $this->convention->createModel($this);
        $models->setRequest($req)
            ->paginate();

        $this->beforeIndexFind($req, $models);
        if (!$models->getSqlPart('orderBy')) {
            $models->sort();
        }

        $models->all();
        $this->afterIndexFind($req, $models);

        // 2. 组装返回数据
        $data = [];
        /** @var Model $model */
        foreach ($models as $model) {
            $data[] = array_merge($model->toArray(), $this->buildIndexData($model));
        }

        return $this->buildIndexRet($models->toRet(['data' => $data]), $req, $models);
    }

    /**
     * @param Request $req
     * @param Model|Model[] $models
     */
    protected function beforeIndexFind(Request $req, Model $models)
    {
        // do nothing.
    }

    /**
     * @param Request $req
     * @param Model|Model[] $models
     */
    protected function afterIndexFind(Request $req, Model $models)
    {
        // do nothing.
    }

    /**
     * @param Model $model
     * @return array
     */
    protected function buildIndexData(Model $model)
    {
        return [];
    }

    protected function buildIndexRet($ret, Request $req, Model $models)
    {
        return $ret;
    }
}
