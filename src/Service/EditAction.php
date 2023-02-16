<?php

namespace Miaoxing\Services\Service;

use Exception;
use Miaoxing\Plugin\BaseController;
use Miaoxing\Services\Action\BaseAction;
use Wei\Ret;

class EditAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return Ret
     * @throws Exception
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        $model = $this->convention->createModel($controller)->findFromReq($this->req);

        return $model->toRet();
    }
}
