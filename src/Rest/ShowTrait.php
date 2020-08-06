<?php

namespace Miaoxing\Services\Rest;

use Miaoxing\Plugin\Service\Model;
use Wei\Req;

/**
 * @mixin \ConventionMixin
 */
trait ShowTrait
{
    public function showAction(Req $req)
    {
        $model = $this->convention->createModel($this);

        $this->beforeShowFind($req, $model);
        $model = $model->findOrFail($req['id']);

        return $model->toRet([
            'data' => array_merge($model->toArray(), $this->buildShowData($model)),
        ]);
    }

    /**
     * @param Req $req
     * @param Model $model
     */
    protected function beforeShowFind(Req $req, Model $model)
    {
        // do nothing.
    }

    /**
     * @param Model $model
     * @return array
     */
    protected function buildShowData(Model $model)
    {
        return [];
    }
}
