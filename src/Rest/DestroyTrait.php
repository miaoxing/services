<?php

namespace Miaoxing\Services\Rest;

use Miaoxing\Plugin\Service\Model;
use Miaoxing\Services\Service\Request;
use Wei\RetTrait;

/**
 * @mixin \ConventionMixin
 */
trait DestroyTrait
{
    use RetTrait;

    public function destroyAction($req)
    {
        $model = $this->convention->createModel($this)->findOrFail($req['id']);

        $ret = $this->beforeDestroy($req, $model);
        $this->tie($ret);

        $model->destroy();

        $this->afterDestroy($req, $model);

        return $model->toRet();
    }

    protected function beforeDestroy(Request $req, Model $model)
    {
        return suc();
    }

    protected function afterDestroy(Request $req, Model $model)
    {

    }
}
