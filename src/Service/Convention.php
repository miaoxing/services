<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\Service\Model;
use Miaoxing\Plugin\Service\Str;
use ReflectionClass;

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
        $class = get_class($object);
        // or (new ReflectionClass($instance))->isAnonymous()
        if ('class@' === substr($class, 0, 6)) {
            $name = $this->getModelNameFromPage($class);
        } else {
            $name = $this->removeSuffix(get_class($object), 'Controller');
            $name = lcfirst($this->str->baseName($name));
        }
        $name = $this->str->singularize($name);
        return $name;
    }

    /**
     * @param object $object
     * @return Model
     */
    public function createModel($object)
    {
        if (method_exists($object, 'createModel')) {
            return $object->createModel();
        }

        return $this->{$this->getModelName($object) . 'Model'}();
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
        $file = (new ReflectionClass($class))->getFileName();
        $basename = basename($file);
        // 如果是资源入口(index.php)或包含变量(如[id].php)，则返回更上一级的目录名称
        if ($basename === 'index.php' || false !== strpos($basename, '[')) {
            $name = basename(dirname($file));
        } else {
            $name = basename(dirname(dirname($file)));
        }
        return $this->str->camel($name);
    }
}
