<?php

namespace Miaoxing\Services\Middleware;

use Wei\RetTrait;

/**
 * @property \Miaoxing\Plugin\Service\App $app
 * @property \Wei\Request $request
 * @property \Wei\Response $response
 */
abstract class BaseMiddleware extends \Wei\Base
{
    use RetTrait;

    /**
     * Execute the middleware
     *
     * @param callable $next
     */
    abstract public function __invoke($next);
}
