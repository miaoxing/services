<?php

namespace Miaoxing\Services\Crud;

use Miaoxing\Plugin\Service\Model;
use Miaoxing\Services\Service\Convention;
use Miaoxing\Services\Service\Request;

/**
 * @property Convention $convention
 */
trait EditUpdateTrait
{
    public function editAction(Request $req)
    {
        $model = $this->convention->getModelName($this);

        $$model = $this->convention->createModel($this)->findOrInit($req['id']);

        if ($req->json()) {
            return $$model->toRet();
        } else {
            $this->js[$model] = $$model;
            return get_defined_vars();
        }
    }

    public function updateAction($req)
    {
        $model = $this->convention->createModel($this)->findOrFail($req['id'])->fromArray($req);

        $ret = $this->beforeSave($req, $model);
        if ($ret['code'] !== 1) {
            return $ret;
        }

        $model->save();

        return $this->suc();
    }

    protected function beforeSave(Request $req, Model $model)
    {
        return $this->suc();
    }
}
