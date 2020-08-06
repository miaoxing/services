<?php

namespace Miaoxing\Services\Rest;

use Miaoxing\Plugin\Service\Model;
use Wei\Req;

/**
 * @mixin \ConventionMixin
 */
trait EditUpdateTrait
{
    public function editAction(Req $req)
    {
        $model = $this->convention->createModel($this)->findFromRequest($req);

        return $model->toRet();
    }

    public function updateAction(Req $req)
    {
        $ret = $this->beforeUpdateFind($req);
        $this->tie($ret);

        $model = $this->convention
            ->createModel($this)
            ->findFromRequest($req)
            ->fromArray($req);

        $ret = $this->beforeSave($req, $model);
        $this->tie($ret);

        $model->save();

        return $model->toRet();
    }

    protected function beforeUpdateFind(Req $req)
    {
        return suc();
    }

    protected function beforeSave(Req $req, Model $model)
    {
        return suc();
    }
}
