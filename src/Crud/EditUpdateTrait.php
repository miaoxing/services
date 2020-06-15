<?php

namespace Miaoxing\Services\Crud;

use Miaoxing\Plugin\Service\Model;
use Miaoxing\Services\Service\Convention;
use Wei\Request;

/**
 * @property Convention $convention
 */
trait EditUpdateTrait
{
    public function editAction(Request $req)
    {
        $model = $this->convention->getModelName($this);

        ${$model} = $this->convention->createModel($this)->findOrInit($req['id']);

        if ($req->acceptJson()) {
            return ${$model}->toRet();
        } else {
            return get_defined_vars();
        }
    }

    public function updateAction($req)
    {
        $model = $this->convention->createModel($this)->findOrFail($req['id'])->fromArray($req);

        $ret = $this->beforeSave($req, $model);
        if (1 !== $ret['code']) {
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
