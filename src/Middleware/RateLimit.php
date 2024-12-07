<?php

namespace Miaoxing\Services\Middleware;

use Miaoxing\Plugin\Service\Ret;

/**
 * 限制用户在一段请求时间内(如每分钟,每小时,每天)最多的请求次数
 *
 * @mixin \UserPropMixin
 * @mixin \CounterPropMixin
 */
class RateLimit extends BaseMiddleware
{
    /**
     * 每分钟作为一个时间窗口
     */
    public const MINUTE = 60;

    /**
     * 每小时作为一个时间窗口
     */
    public const HOUR = 3600;

    /**
     * 每天作为一个时间窗口
     */
    public const DAY = 86400;

    /**
     * 一个时间窗口的长度
     *
     * @var int
     */
    protected $timeWindow;

    /**
     * 在一个时间窗口内,最多请求的次数
     *
     * @var int
     */
    protected $max;

    /**
     * 超出请求次数返回的提示信息
     *
     * @var string
     */
    protected $responseText;

    /**
     * 操作返回错误时才增加计数器
     *
     * @var bool
     */
    protected $incrOnErr = false;

    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        $key = 'rate-limit' . $this->getIdentifier() . '-' . (int) (time() / $this->timeWindow);

        if ($this->incrOnErr) {
            // 先检查是否超过
            if ($this->counter->get($key) >= $this->max) {
                return $this->buildErr();
            }

            // 不超过才运行
            $ret = $next();

            // 运行错误才计数
            if ($ret instanceof Ret && $ret->isErr()) {
                $this->counter->incr($key);
            }
            return $ret;
        }

        // 先计数，超过则返回错误，不执行操作
        if ($this->counter->incr($key) > $this->max) {
            return $this->buildErr();
        }

        return $next();
    }

    /**
     * 获取客户端唯一标识
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->user->id() ?: $this->req->getIp();
    }

    protected function buildErr(): Ret
    {
        return err($this->responseText ?: '您的操作太频繁，请稍候再试', -2003);
    }
}
