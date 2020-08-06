<?php

namespace Miaoxing\Services\Crud;

use Miaoxing\Plugin\Service\Model;
use Miaoxing\Services\Service\Convention;
use Wei\Req;

/**
 * @property Convention $convention
 */
trait IndexTrait
{
    public function indexAction(Req $req)
    {
        if ($req->acceptJson() || $req->isFormat('csv')) {
            // 1. 构建查询
            if (method_exists($this, 'createModel')) {
                $models = $this->createModel();
            } else {
                $models = $this->convention->createModel($this);
            }
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

        $this->beforeViewRender();
        return get_defined_vars();
    }

    protected function beforeViewRender()
    {
        // do nothing.
    }

    /**
     * @param Req $req
     * @param Model|Model[] $models
     */
    protected function beforeIndexFind(Req $req, Model $models)
    {
        // do nothing.
    }

    /**
     * @param Req $req
     * @param Model|Model[] $models
     */
    protected function afterIndexFind(Req $req, Model $models)
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

    protected function buildIndexRet($ret, Req $req, Model $models)
    {
        return $ret;
    }
}
