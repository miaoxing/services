<?php

namespace Miaoxing\Services\Rest;

use Miaoxing\Plugin\Service\Model;
use Miaoxing\Services\Service\Request;

/**
 * @mixin \ConventionMixin
 */
trait EditUpdateTrait
{
    public function editAction(Request $req)
    {
        $model = $this->convention->createModel($this);
        if ($this->app->getAction() === 'edit') {
            $model->findOrFail($req['id']);
        }

        return $model->toRet();
    }

    public function updateAction(Request $req)
    {
        $ret = $this->beforeUpdateFind($req);
        $this->tie($ret);

        $model = $this->convention->createModel($this);
        if ($this->app->getAction() === 'edit') {
            $model->findOrFail($req['id']);
        }

        $model->fromArray($req);
        $ret = $this->beforeSave($req, $model);
        $this->tie($ret);

        $model->save();

        return $model->toRet();
    }

    protected function beforeUpdateFind(Request $req)
    {
        return suc();
    }

    protected function beforeSave(Request $req, Model $model)
    {
        return suc();
    }
}
