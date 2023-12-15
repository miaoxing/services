<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\Model\ReqQueryTrait;

/**
 * @mixin \StrMixin
 * @mixin \ClsMixin
 */
class Convention extends BaseService
{
    /**
     * @param object $object 可传入控制器或服务
     * @return string
     */
    public function getModelName(object $object)
    {
        $class = get_class($object);
        if ((new \ReflectionClass($object))->isAnonymous()) {
            $name = $this->getModelNameFromPage($class);
        } else {
            $name = $this->removeSuffix($class, 'Controller');
            $name = lcfirst($this->cls->baseName($name));
        }
        $name = $this->str->singularize($name);
        return $name;
    }

    /**
     * @param object $object
     * @return BaseModel|ReqQueryTrait
     */
    public function createModel($object)
    {
        if (method_exists($object, 'createModel')) {
            return $object->createModel();
        }

        return $this->wei->get($this->getModelName($object) . 'Model');
    }

    protected function removeSuffix($str, $suffix)
    {
        if (wei()->isEndsWith($str, $suffix)) {
            $str = substr($str, 0, -strlen($suffix));
        }
        return $str;
    }

    protected function getModelNameFromPage(string $class): string
    {
        $file = (new \ReflectionClass($class))->getFileName();
        $basename = basename($file);
        // 如果是资源入口(index.php)或包含变量(如[id].php)，则返回更上一级的目录名称
        if ('index.php' === $basename || false !== strpos($basename, '[')) {
            $name = basename(dirname($file));
        } else {
            $name = basename(dirname($file, 2));
        }
        return $this->str->camel($name);
    }
}
