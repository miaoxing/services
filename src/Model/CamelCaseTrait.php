<?php

namespace Miaoxing\Services\Model;

use Wei\Logger;
use Wei\Request;
use Wei\Wei;

/**
 * @property-read Wei $wei
 * @property-read Logger $logger
 */
trait CamelCaseTrait
{
    public static function bootCamelCaseTrait()
    {
        static::on('inputColumn', 'snake');

        static::on('outputColumn', 'camel');

        static::on('checkInputColumn', 'checkCamelCaseColumn');
    }

    protected function checkCamelCaseColumn($column, $data)
    {
        // 对用户数据进行检查,避免使用两种格式造成混乱
        if ($data instanceof Request) {
            return strpos($column, '_') === false;
        }

        return true;
    }
}
