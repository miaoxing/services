<?php

namespace Miaoxing\Services\Middleware;

class HttpMethod extends BaseMiddleware
{
    /**
     * @var array
     */
    protected $actions;

    public function __invoke($next)
    {
        $action = $this->app->getAction();

        if (isset($this->actions[$action])) {
            $methods = array_map('strtoupper', (array) $this->actions[$action]);
            if (!in_array($this->req->getMethod(), $methods, true)) {
                return $this->res->json([
                    'code' => -405,
                    'message' => '请求方式不被允许',
                ]);
            }
        }

        return $next();
    }
}
