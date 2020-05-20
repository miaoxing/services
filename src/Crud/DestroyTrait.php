<?php

namespace Miaoxing\Services\Crud;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Services\Service\Convention;
use Miaoxing\Services\Service\Request;
use Wei\RetTrait;

/**
 * @property Convention $convention
 */
trait DestroyTrait
{
    use RetTrait;

    public function destroyAction($req)
    {
        $model = $this->convention->createModel($this)->findOneById($req['id']);

        $ret = $this->beforeDestroy($req, $model);
        if (1 !== $ret['code']) {
            return $ret;
        }

        $model->destroy();

        return $this->suc();
    }

    protected function beforeDestroy(Request $req, BaseModelV2 $model)
    {
        return $this->suc();
    }
}
