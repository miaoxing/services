<?php

namespace Miaoxing\Services\Middleware;

use Wei\RetTrait;

class IpRestrict extends BaseMiddleware
{
    use RetTrait;

    protected $allowedIps;

    public function __invoke($next)
    {
        if (!$this->allowedIps) {
            $this->res->setStatusCode(403);

            return $this->err('Allowed IPs is not set!');
        }

        $ip = $this->req->getIp();
        if (!in_array($ip, $this->allowedIps, true)) {
            $this->res->setStatusCode(403);

            return $this->err(sprintf('IP %s is not allowed!', $ip));
        }

        return $next();
    }
}
