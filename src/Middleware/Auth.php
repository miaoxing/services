<?php

namespace Miaoxing\Services\Middleware;

use Wei\BaseController;

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
        // deprecated
        // 检查控制器是否需要登录
        if (false === $controller->getOption('controllerAuth')) {
            return $next();
        }
        if (false === $controller->getOption('requireAuth')) {
            return $next();
        }

        // deprecated 改用 only 和 except 选项
        // 检查操作是否需要登录
        $action = $this->app->getAction();
        $auths = $controller->getOption('actionAuths');
        if (isset($auths[$action]) && false === $auths[$action]) {
            return $next();
        }

        $ret = $this->event->until('checkAuth');
        if (!$ret) {
            $loginRet = $this->user->checkLogin();
            if ($loginRet->isErr()) {
                $loginRet['next'] = 'users/login';
                return $loginRet;
            }
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
     * @return array|\Wei\Res
     */
    protected function redirectLogin($ret)
    {
        if ($this->req->acceptJson()) {
            $ret['code'] = -1 !== $ret['code'] ? $ret['code'] : 401;
            return $ret;
        }

        return $this->res->redirect($this->url->append($ret['next'], ['next' => $this->req->getUrl()]));
    }
}
