<?php

namespace Miaoxing\Services\Middleware;

class CheckRedirectUrl extends BaseMiddleware
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
        if ($nextUrl = $this->request->getQuery('next')) {
            $host = parse_url($nextUrl, PHP_URL_HOST);
            if ($host && $host !== $this->request->getHost() && !in_array($host, $this->whitelist)) {
                return $this->response->json([
                    'code' => -400,
                    'message' => 'Bad Request',
                ]);
            }
        }

        return $next();
    }
}
