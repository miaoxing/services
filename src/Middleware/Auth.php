<?php

namespace Miaoxing\Services\Middleware;

use Miaoxing\Plugin\BaseController;

/**
 * @mixin \UserMixin
 * @mixin \UrlMixin
 * @mixin \EventMixin
 */
class Auth extends BaseMiddleware
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($next, BaseController $controller = null)
    {
        // 检查控制器是否需要登录
        if (false === $controller->getOption('controllerAuth')) {
            return $next();
        }

        // 检查操作是否需要登录
        $action = $this->app->getAction();
        $auths = $controller->getOption('actionAuths');
        if (isset($auths[$action]) && false === $auths[$action]) {
            return $next();
        }

        $ret = $this->event->until('checkAuth');
        if (!$ret && !$this->user->isLogin()) {
            $ret = $this->err([
                'message' => '您好,请登录',
                'next' => $this->url('users/login'),
            ]);
        }

        if (!$ret) {
            return $next();
        }

        return $this->redirectLogin($ret);
    }

    /**
     * 跳转到登录地址,或者返回包含登录信息的JSON
     *
     * @param string $url
     * @param mixed $ret
     * @return array|\Wei\Response
     */
    protected function redirectLogin($ret)
    {
        if ($this->req->acceptJson()) {
            $ret['code'] = -1 !== $ret['code'] ? $ret['code'] : 401;
            $ret['next'] = $this->url->append($ret['next'], ['next' => $this->req->getReferer()]);
            return $ret;
        }

        return $this->response->redirect($this->url->append($ret['next'], ['next' => $this->req->getUrl()]));
    }
}
