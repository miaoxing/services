<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\Service\App;

/**
 * @property App $app
 */
class Url extends \Wei\Url
{
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
