<?php

namespace Miaoxing\Services\App;

use Wei\RetTrait;

/**
 * @property \Wei\Event $event
 */
abstract class BaseController extends \Wei\BaseController
{
    use RetTrait;

    /**
     * The name of controller
     *
     * @var string
     */
    protected $controllerName;

    /**
     * The names of action
     *
     * @var array
     */
    protected $actionNames = [];

    /**
     * Initialize the controller, can be used to register middleware
     */
    public function init()
    {
        $this->event->trigger('controllerInit', [$this]);
    }
}
