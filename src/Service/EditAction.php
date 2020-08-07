<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseController;
use Miaoxing\Services\Action\BaseAction;

class EditAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws \Exception
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        $model = $this->convention->createModel($controller)->findFromReq($this->req);

        return $model->toRet();
    }
}
