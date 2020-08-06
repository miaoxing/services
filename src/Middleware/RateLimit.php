<?php

namespace Miaoxing\Services\Middleware;

/**
 * 限制用户在一段请求时间内(如每分钟,每小时,每天)最多的请求次数
 *
 * @mixin \UserMixin
 */
class RateLimit extends BaseMiddleware
{
    /**
     * 每分钟作为一个时间窗口
     */
    const MINUTE = 60;

    /**
     * 每小时作为一个时间窗口
     */
    const HOUR = 3600;

    /**
     * 每天作为一个时间窗口
     */
    const DAY = 86400;

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
     * @var string
     */
    protected $responseText;

    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        $key = 'rate-limit' . $this->getIdentifier() . '-' . (int) (time() / $this->timeWindow);

        if (wei()->counter->incr($key) > $this->max) {
            return $this->res->json([
                'code' => -2003,
                'message' => $this->responseText ?: '您的操作太频繁，请稍候再试',
            ]);
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
        return $this->user->id() ?: $this->req->getServer('REMOTE_ADDR');
    }
}
