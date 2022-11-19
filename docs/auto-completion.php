<?php

/**
 * @property    Miaoxing\Services\Service\Asset $asset
 * @method      mixed asset($file, $version = true)
 */
class AssetMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Coll $coll
 */
class CollMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Convention $convention
 */
class ConventionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\CreateAction $createAction
 */
class CreateActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Db $db
 * @method      Record db($table = null) Create a new instance of a SQL query builder with specified table name
 */
class DbMixin
{
}

/**
 * @property    Miaoxing\Services\Service\DefaultsAction $defaultsAction
 */
class DefaultsActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\DestroyAction $destroyAction
 */
class DestroyActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\EditAction $editAction
 */
class EditActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Http $http
 * @method      Miaoxing\Services\Service\Http http($url = null, $options = []) Create a new HTTP object and execute
 */
class HttpMixin
{
}

/**
 * @property    Miaoxing\Services\Service\IndexAction $indexAction
 */
class IndexActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Laravel $laravel
 */
class LaravelMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Logger $logger
 * @method      bool logger($level, $message, $context = []) Logs with an arbitrary level
 */
class LoggerMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Money $money A service that handles money, following the implement of `currency.js`
 */
class MoneyMixin
{
}

/**
 * @property    Miaoxing\Services\Service\NewAction $newAction
 */
class NewActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\OptionTrait $optionTrait
 */
class OptionTraitMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Page $page
 */
class PageMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Random $random
 */
class RandomMixin
{
}

/**
 * @property    Miaoxing\Services\Service\SexConst $sexConst 性别常量服务
 */
class SexConstMixin
{
}

/**
 * @property    Miaoxing\Services\Service\ShowAction $showAction
 */
class ShowActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\StaticTrait $staticTrait
 */
class StaticTraitMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Status $status 状态
 */
class StatusMixin
{
}

/**
 * @property    Miaoxing\Services\Service\UpdateAction $updateAction
 */
class UpdateActionMixin
{
}

/**
 * @property    Miaoxing\Services\Service\Url $url
 * @method      string url($url = '', $argsOrParams = [], $params = []) Invoke the "to" method
 */
class UrlMixin
{
}

/**
 * @property    Miaoxing\Services\Service\View $view
 * @method      string view($name = null, $data = []) Render a PHP template
 */
class ViewMixin
{
}

/**
 * @property    Miaoxing\Services\Service\YesNoConst $yesNoConst 是否常量服务
 */
class YesNoConstMixin
{
}

/**
 * @mixin AssetMixin
 * @mixin CollMixin
 * @mixin ConventionMixin
 * @mixin CreateActionMixin
 * @mixin DbMixin
 * @mixin DefaultsActionMixin
 * @mixin DestroyActionMixin
 * @mixin EditActionMixin
 * @mixin HttpMixin
 * @mixin IndexActionMixin
 * @mixin LaravelMixin
 * @mixin LoggerMixin
 * @mixin MoneyMixin
 * @mixin NewActionMixin
 * @mixin OptionTraitMixin
 * @mixin PageMixin
 * @mixin RandomMixin
 * @mixin SexConstMixin
 * @mixin ShowActionMixin
 * @mixin StaticTraitMixin
 * @mixin StatusMixin
 * @mixin UpdateActionMixin
 * @mixin UrlMixin
 * @mixin ViewMixin
 * @mixin YesNoConstMixin
 */
class AutoCompletion
{
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion();
}

/** @var Miaoxing\Services\Service\Asset $asset */
$asset = wei()->asset;

/** @var Miaoxing\Services\Service\Coll $coll */
$coll = wei()->coll;

/** @var Miaoxing\Services\Service\Convention $convention */
$convention = wei()->convention;

/** @var Miaoxing\Services\Service\CreateAction $createAction */
$createAction = wei()->createAction;

/** @var Miaoxing\Services\Service\Db $db */
$db = wei()->db;

/** @var Miaoxing\Services\Service\DefaultsAction $defaultsAction */
$defaultsAction = wei()->defaultsAction;

/** @var Miaoxing\Services\Service\DestroyAction $destroyAction */
$destroyAction = wei()->destroyAction;

/** @var Miaoxing\Services\Service\EditAction $editAction */
$editAction = wei()->editAction;

/** @var Miaoxing\Services\Service\Http $http */
$http = wei()->http;

/** @var Miaoxing\Services\Service\IndexAction $indexAction */
$indexAction = wei()->indexAction;

/** @var Miaoxing\Services\Service\Laravel $laravel */
$laravel = wei()->laravel;

/** @var Miaoxing\Services\Service\Logger $logger */
$logger = wei()->logger;

/** @var Miaoxing\Services\Service\Money $money */
$money = wei()->money;

/** @var Miaoxing\Services\Service\NewAction $newAction */
$newAction = wei()->newAction;

/** @var Miaoxing\Services\Service\OptionTrait $optionTrait */
$optionTrait = wei()->optionTrait;

/** @var Miaoxing\Services\Service\Page $page */
$page = wei()->page;

/** @var Miaoxing\Services\Service\Random $random */
$random = wei()->random;

/** @var Miaoxing\Services\Service\SexConst $sexConst */
$sexConst = wei()->sexConst;

/** @var Miaoxing\Services\Service\ShowAction $showAction */
$showAction = wei()->showAction;

/** @var Miaoxing\Services\Service\StaticTrait $staticTrait */
$staticTrait = wei()->staticTrait;

/** @var Miaoxing\Services\Service\Status $status */
$status = wei()->status;

/** @var Miaoxing\Services\Service\UpdateAction $updateAction */
$updateAction = wei()->updateAction;

/** @var Miaoxing\Services\Service\Url $url */
$url = wei()->url;

/** @var Miaoxing\Services\Service\View $view */
$view = wei()->view;

/** @var Miaoxing\Services\Service\YesNoConst $yesNoConst */
$yesNoConst = wei()->yesNoConst;
