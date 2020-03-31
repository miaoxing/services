<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\Service\Model;
use Miaoxing\Services\Service\Str;

/**
 * @property Str $str
 */
class Convention extends BaseService
{
    /**
     * @param object $object 可传入控制器或服务
     * @return string
     */
    public function getModelName($object)
    {
        $name = $this->removeSuffix(get_class($object), 'Controller');
        $name = lcfirst($this->str->baseName($name));
        $name = $this->str->singularize($name);

        return $name;
    }

    /**
     * @param object $object
     * @return Model
     */
    public function createModel($object)
    {
        return $this->{$this->getModelName($object) . 'Model'}();
    }

    protected function removeSuffix($str, $suffix)
    {
        if (wei()->isEndsWith($str, $suffix)) {
            $str = substr($str, 0, -strlen($suffix));
        }
        return $str;
    }
}
