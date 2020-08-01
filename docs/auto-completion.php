<?php

/**
 * @property    Miaoxing\Services\Service\Asset $asset
 * @method      mixed asset($file, $version = true)
 */
class AssetMixin {
}

/**
 * @property    Miaoxing\Services\Service\Coll $coll
 */
class CollMixin {
}

/**
 * @property    Miaoxing\Services\Service\Convention $convention
 */
class ConventionMixin {
}

/**
 * @property    Miaoxing\Services\Service\CsvExporter $csvExporter Csv格式数据导出服务
 */
class CsvExporterMixin {
}

/**
 * @property    Miaoxing\Services\Service\Db $db
 * @method      Record db($table = null) Create a new instance of a SQL query builder with specified table name
 */
class DbMixin {
}

/**
 * @property    Miaoxing\Services\Service\Http $http
 * @method      Miaoxing\Services\Service\Http http($url = null, $options = []) Create a new HTTP object and execute
 */
class HttpMixin {
}

/**
 * @property    Miaoxing\Services\Service\IsRecordExists $isRecordExists
 * @method      bool isRecordExists($input = null, $table = null, $field = 'id') Check if the input is existing table record
 */
class IsRecordExistsMixin {
}

/**
 * @property    Miaoxing\Services\Service\Laravel $laravel
 */
class LaravelMixin {
}

/**
 * @property    Miaoxing\Services\Service\Logger $logger
 * @method      bool logger($level, $message, $context = []) Logs with an arbitrary level
 */
class LoggerMixin {
}

/**
 * @property    Miaoxing\Services\Service\OptionTrait $optionTrait
 */
class OptionTraitMixin {
}

/**
 * @property    Miaoxing\Services\Service\Page $page
 */
class PageMixin {
}

/**
 * @property    Miaoxing\Services\Service\Random $random
 */
class RandomMixin {
}

/**
 * @property    Miaoxing\Services\Service\SexConst $sexConst 性别常量服务
 */
class SexConstMixin {
}

/**
 * @property    \Wei\Share $share
 */
class ShareMixin {
}

/**
 * @property    Miaoxing\Services\Service\StaticTrait $staticTrait
 */
class StaticTraitMixin {
}

/**
 * @property    Miaoxing\Services\Service\Status $status 状态
 */
class StatusMixin {
}

/**
 * @property    Miaoxing\Services\Service\Url $url
 * @method      string url($url = '', $argsOrParams = [], $params = []) Invoke the "to" method
 */
class UrlMixin {
}

/**
 * @property    Miaoxing\Services\Service\View $view
 * @method      string view($name = null, $data = []) Render a PHP template
 */
class ViewMixin {
}

/**
 * @property    Miaoxing\Services\Service\YesNoConst $yesNoConst 是否常量服务
 */
class YesNoConstMixin {
}

/**
 * @mixin AssetMixin
 * @mixin CollMixin
 * @mixin ConventionMixin
 * @mixin CsvExporterMixin
 * @mixin DbMixin
 * @mixin HttpMixin
 * @mixin IsRecordExistsMixin
 * @mixin LaravelMixin
 * @mixin LoggerMixin
 * @mixin OptionTraitMixin
 * @mixin PageMixin
 * @mixin RandomMixin
 * @mixin SexConstMixin
 * @mixin ShareMixin
 * @mixin StaticTraitMixin
 * @mixin StatusMixin
 * @mixin UrlMixin
 * @mixin ViewMixin
 * @mixin YesNoConstMixin
 */
class AutoCompletion {
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion;
}

/** @var Miaoxing\Services\Service\Asset $asset */
$asset = wei()->asset;

/** @var Miaoxing\Services\Service\Coll $coll */
$coll = wei()->coll;

/** @var Miaoxing\Services\Service\Convention $convention */
$convention = wei()->convention;

/** @var Miaoxing\Services\Service\CsvExporter $csvExporter */
$csvExporter = wei()->csvExporter;

/** @var Miaoxing\Services\Service\Db $db */
$db = wei()->db;

/** @var Miaoxing\Services\Service\Http $http */
$http = wei()->http;

/** @var Miaoxing\Services\Service\IsRecordExists $isRecordExists */
$isRecordExists = wei()->isRecordExists;

/** @var Miaoxing\Services\Service\Laravel $laravel */
$laravel = wei()->laravel;

/** @var Miaoxing\Services\Service\Logger $logger */
$logger = wei()->logger;

/** @var Miaoxing\Services\Service\OptionTrait $optionTrait */
$optionTrait = wei()->optionTrait;

/** @var Miaoxing\Services\Service\Page $page */
$page = wei()->page;

/** @var Miaoxing\Services\Service\Random $random */
$random = wei()->random;

/** @var Miaoxing\Services\Service\SexConst $sexConst */
$sexConst = wei()->sexConst;

/** @var \Wei\Share $share */
$share = wei()->share;

/** @var Miaoxing\Services\Service\StaticTrait $staticTrait */
$staticTrait = wei()->staticTrait;

/** @var Miaoxing\Services\Service\Status $status */
$status = wei()->status;

/** @var Miaoxing\Services\Service\Url $url */
$url = wei()->url;

/** @var Miaoxing\Services\Service\View $view */
$view = wei()->view;

/** @var Miaoxing\Services\Service\YesNoConst $yesNoConst */
$yesNoConst = wei()->yesNoConst;
