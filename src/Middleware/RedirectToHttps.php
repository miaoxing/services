<?php

namespace Miaoxing\Services\Middleware;

class RedirectToHttps extends BaseMiddleware
{
    /**
     * 要跳转到HTTPS地址的域名,如example.com
     *
     * @var array
     */
    protected $hosts = [];

    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        if (!$this->hosts) {
            return $next();
        }

        if ('http' == $this->req->getScheme() && in_array($this->req->getHost(), $this->hosts, true)) {
            $url = 'https' . substr($this->req->getUrl(), 4);

            return $this->res->redirect($url);
        }

        return $next();
    }
}
