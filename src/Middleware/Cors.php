<?php

namespace Miaoxing\Services\Middleware;

/**
 * @experimental will move to wei/wei
 */
class Cors extends BaseMiddleware
{
    /**
     * @var string[]
     */
    protected $allowOrigins = ['*'];

    /**
     * @var string[]
     */
    protected $allowMethods = ['*'];

    /**
     * @var string[]
     */
    protected $allowHeaders = ['*'];

    /**
     * @var int|null
     */
    protected $maxAge = 0;

    public function __invoke($next)
    {
        $this->processAllowOriginHeader();

        if ($this->req->isPreflight()) {
            $this->processAllowMethods();
            $this->processAllowHeaders();
            $this->processMaxAge();
            // Response without content
            return;
        }

        return $next();
    }

    protected function processAllowOriginHeader()
    {
        $header = '';
        if ($this->allowOrigins === ['*']) {
            $header = '*';
        } else {
            $origin = $this->req->getHeader('Origin');
            if (in_array($origin, $this->allowOrigins, true)) {
                $header = $origin;
            }
        }
        if ($header) {
            $this->res->setHeader('Access-Control-Allow-Origin', $header);
        }
    }

    protected function processAllowMethods()
    {
        if ($this->allowMethods === ['*']) {
            $header = $this->req->getHeader('Access-Control-Request-Method');
        } else {
            $header = implode(', ', $this->allowMethods);
        }
        $this->res->setHeader('Access-Control-Allow-Methods', $header);
    }

    protected function processAllowHeaders()
    {
        if ($this->allowHeaders === ['*']) {
            $header = $this->req->getHeader('Access-Control-Request-Headers');
        } else {
            $header = implode(', ', $this->allowHeaders);
        }
        $this->res->setHeader('Access-Control-Allow-Headers', $header);
    }

    protected function processMaxAge()
    {
        if (null !== $this->maxAge) {
            $this->res->setHeader('Access-Control-Max-Age', $this->maxAge);
        }
    }
}
