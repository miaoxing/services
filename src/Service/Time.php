<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseService;

/**
 * 时间日期
 */
class Time extends BaseService
{
    /**
     * @var int
     */
    protected $timestamp;

    /**
     * @return string
     * @svc
     */
    protected function now()
    {
        return date('Y-m-d H:i:s', $this->timestamp());
    }

    /**
     * @return string
     * @svc
     */
    protected function today()
    {
        return date('Y-m-d', $this->timestamp());
    }

    /**
     * @return int
     */
    protected function timestamp()
    {
        return $this->timestamp ?: time();
    }
}
