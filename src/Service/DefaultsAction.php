<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Services\Action\BaseAction;
use Wei\Ret;

/**
 * @mixin \StrMixin
 */
class DefaultsAction extends BaseAction
{
    /**
     * @param BaseController $controller
     * @return Ret
     * @svc
     */
    protected function exec(BaseController $controller): Ret
    {
        $file = (new \ReflectionClass($controller))->getFileName();
        $name = basename(dirname($file, 2));

        $name = $this->str->singularize($this->str->camel($name));

        /** @var BaseModel $model */
        $model = $this->wei->get($name . 'Model');

        return $model->toRet();
    }
}
