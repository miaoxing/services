<?php

namespace Miaoxing\Services\Service;

class Asset
{
}

class Coll
{
}

class Convention
{
}

class CreateAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @see UpdateAction::exec
     */
    public static function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeFind
     */
    public static function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeSave
     */
    public static function beforeSave(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::afterSave
     */
    public static function afterSave(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public static function setReq(\Wei\Req $req)
    {
    }
}

class CsvExporter
{
}

class Db
{
}

class DestroyAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @see DestroyAction::exec
     */
    public static function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see DestroyAction::beforeDestroy
     */
    public static function beforeDestroy(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see DestroyAction::afterDestroy
     */
    public static function afterDestroy(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public static function setReq(\Wei\Req $req)
    {
    }
}

class EditAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws \Exception
     * @see EditAction::exec
     */
    public static function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public static function setReq(\Wei\Req $req)
    {
    }
}

class Http
{
}

class IndexAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @see IndexAction::exec
     */
    public static function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::beforeReqQuery
     */
    public static function beforeReqQuery(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::afterReqQuery
     */
    public static function afterReqQuery(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::beforeFind
     */
    public static function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::afterFind
     */
    public static function afterFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::buildData
     */
    public static function buildData(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::buildRet
     */
    public static function buildRet(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public static function setReq(\Wei\Req $req)
    {
    }
}

class Laravel
{
    /**
     * Bootstrap Laravel application
     *
     * @return $this
     * @see Laravel::bootstrap
     */
    public static function bootstrap()
    {
    }

    /**
     * @return Application
     * @see Laravel::getApp
     */
    public static function getApp()
    {
    }
}

class Logger
{
}

class NewAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws \Exception
     * @see EditAction::exec
     */
    public static function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public static function setReq(\Wei\Req $req)
    {
    }
}

class Page
{
}

class Random
{
}

class SexConst
{
}

class ShowAction
{
    /**
     * @param BaseController $controller
     * @return array|mixed
     * @throws \Exception
     * @see ShowAction::exec
     */
    public static function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see ShowAction::beforeFind
     */
    public static function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see ShowAction::afterFind
     */
    public static function afterFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see ShowAction::buildData
     */
    public static function buildData(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public static function setReq(\Wei\Req $req)
    {
    }
}

class Status
{
}

class UpdateAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @see UpdateAction::exec
     */
    public static function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeFind
     */
    public static function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeSave
     */
    public static function beforeSave(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::afterSave
     */
    public static function afterSave(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public static function setReq(\Wei\Req $req)
    {
    }
}

class Url
{
    /**
     * Generate the URL by specified URL and parameters
     *
     * @param string $url
     * @param array $argsOrParams
     * @param array $params
     * @return string
     * @see Url::to
     */
    public static function to($url = '', $argsOrParams = [], $params = [])
    {
    }
}

class View
{
}

class YesNoConst
{
}

namespace Miaoxing\Services\Service;

if (0) {
class Asset
{
}

class Coll
{
}

class Convention
{
}

class CreateAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @see UpdateAction::exec
     */
    public function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeFind
     */
    public function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeSave
     */
    public function beforeSave(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::afterSave
     */
    public function afterSave(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public function setReq(\Wei\Req $req)
    {
    }
}

class CsvExporter
{
}

class Db
{
}

class DestroyAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @see DestroyAction::exec
     */
    public function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see DestroyAction::beforeDestroy
     */
    public function beforeDestroy(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see DestroyAction::afterDestroy
     */
    public function afterDestroy(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public function setReq(\Wei\Req $req)
    {
    }
}

class EditAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws \Exception
     * @see EditAction::exec
     */
    public function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public function setReq(\Wei\Req $req)
    {
    }
}

class Http
{
}

class IndexAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @see IndexAction::exec
     */
    public function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::beforeReqQuery
     */
    public function beforeReqQuery(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::afterReqQuery
     */
    public function afterReqQuery(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::beforeFind
     */
    public function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::afterFind
     */
    public function afterFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::buildData
     */
    public function buildData(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see IndexAction::buildRet
     */
    public function buildRet(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public function setReq(\Wei\Req $req)
    {
    }
}

class Laravel
{
    /**
     * Bootstrap Laravel application
     *
     * @return $this
     * @see Laravel::bootstrap
     */
    public function bootstrap()
    {
    }

    /**
     * @return Application
     * @see Laravel::getApp
     */
    public function getApp()
    {
    }
}

class Logger
{
}

class NewAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws \Exception
     * @see EditAction::exec
     */
    public function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public function setReq(\Wei\Req $req)
    {
    }
}

class Page
{
}

class Random
{
}

class SexConst
{
}

class ShowAction
{
    /**
     * @param BaseController $controller
     * @return array|mixed
     * @throws \Exception
     * @see ShowAction::exec
     */
    public function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see ShowAction::beforeFind
     */
    public function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see ShowAction::afterFind
     */
    public function afterFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see ShowAction::buildData
     */
    public function buildData(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public function setReq(\Wei\Req $req)
    {
    }
}

class Status
{
}

class UpdateAction
{
    /**
     * @param BaseController $controller
     * @return array
     * @throws RetException
     * @see UpdateAction::exec
     */
    public function exec(\Miaoxing\Plugin\BaseController $controller)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeFind
     */
    public function beforeFind(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::beforeSave
     */
    public function beforeSave(callable $callable)
    {
    }

    /**
     * @param callable $callable
     * @return $this
     * @see UpdateAction::afterSave
     */
    public function afterSave(callable $callable)
    {
    }

    /**
     * Set the request service
     *
     * @param Req $req
     * @return $this
     * @see BaseAction::setReq
     */
    public function setReq(\Wei\Req $req)
    {
    }
}

class Url
{
    /**
     * Generate the URL by specified URL and parameters
     *
     * @param string $url
     * @param array $argsOrParams
     * @param array $params
     * @return string
     * @see Url::to
     */
    public function to($url = '', $argsOrParams = [], $params = [])
    {
    }
}

class View
{
}

class YesNoConst
{
}
}
