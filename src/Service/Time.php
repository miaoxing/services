<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseService;

/**
 * 时间日期
 */
class Time extends BaseService
{
    protected $now;

    /**
     * @return string
     * @api
     */
    protected function now()
    {
        return date('Y-m-d H:i:s', $this->getNow());
    }

    /**
     * @return string
     * @api
     */
    protected function today()
    {
        return date('Y-m-d', $this->getNow());
    }

    protected function getNow()
    {
        return $this->now ?: time();
    }
}
