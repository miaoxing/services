<?php

namespace Miaoxing\Services\Middleware;

/**
 * 检查来源是否为当前域名或在白名单中
 */
class CheckReferrer extends BaseMiddleware
{
    /**
     * 白名单域名
     *
     * @var array
     */
    protected $whitelist = [];

    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        if ($referrer = $this->req->getReferer()) {
            $host = parse_url($referrer, \PHP_URL_HOST);
            if ($host !== $this->req->getHost() && !in_array($host, $this->whitelist, true)) {
                return $this->res->json([
                    'code' => -2000,
                    'message' => '来源不正确',
                ]);
            }
        }

        return $next();
    }
}
