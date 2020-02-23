<?php

namespace Miaoxing\Services\Middleware;

/**
 * @property \Miaoxing\Plugin\Service\App $app
 * @property \Wei\Request $request
 * @property \Wei\Response $response
 */
abstract class BaseMiddleware extends \Wei\Base
{
    /**
     * Execute the middleware
     *
     * @param callable $next
     */
    abstract public function __invoke($next);
}
