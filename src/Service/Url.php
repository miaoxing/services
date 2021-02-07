<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\Service\App;

/**
 * @property App $app
 */
class Url extends \Wei\Url
{
    /**
     * 如果当前请求存在该参数，则将参数传递到生成 URL 中
     *
     * @var array
     * @experimental
     */
    protected $passThroughParams = [];

    /**
     * Generate the URL by specified URL and parameters
     *
     * @param string $url
     * @param array $argsOrParams
     * @param array $params
     * @return string
     * @svc
     */
    protected function to($url = '', $argsOrParams = [], $params = [])
    {
        if ($this->passThroughParams) {
            if (false !== strpos($url, '%s')) {
                $real = &$params;
            } else {
                $real = &$argsOrParams;
            }
            foreach ($this->passThroughParams as $param) {
                if (!isset($real[$param]) && $this->req->getQuery($param)) {
                    $real[$param] = $this->req->getQuery($param);
                }
            }
        }

        return parent::to($url, $argsOrParams, $params);
    }

    public function curIndex($action = '', $argsOrParams = [], $params = [])
    {
        return $this->__invoke($this->app->getController() . ($action ? ('/' . $action) : ''), $argsOrParams, $params);
    }

    public function curNew()
    {
        return $this->curIndex('new');
    }

    public function curEdit($id = null)
    {
        return $this->curIndex(($id || $this->req['id']) . '/edit');
    }

    public function curShow($id = null)
    {
        return $this->curIndex($id ?: $this->req['id']);
    }

    public function curDestroy($id = null)
    {
        return $this->curIndex(($id ?: $this->req['id']) . '/destroy');
    }

    public function curForm($id = null)
    {
        return $this->curIndex(($id ?: $this->req['id']) ? 'update' : 'create');
    }
}
