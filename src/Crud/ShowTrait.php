<?php

namespace Miaoxing\Services\Crud;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Services\Service\Convention;
use Wei\Req;

/**
 * @property Convention $convention
 */
trait ShowTrait
{
    public function showAction(Req $req)
    {
        if (!$req->acceptJson()) {
            return [];
        }

        if (method_exists($this, 'createModel')) {
            $model = $this->createModel();
        } else {
            $model = $this->convention->createModel($this);
        }

        $this->beforeShowFind($req, $model);
        $model = $model->findOneById($req['id']);

        return $model->toRet([
            'data' => array_merge($model->toArray(), $this->buildShowData($model)),
        ]);
    }

    /**
     * @param Req $req
     * @param BaseModelV2 $model
     */
    protected function beforeShowFind(Req $req, BaseModelV2 $model)
    {
        // do nothing.
    }

    /**
     * @param BaseModelV2 $model
     * @return array
     */
    protected function buildShowData(BaseModelV2 $model)
    {
        return [];
    }
}
