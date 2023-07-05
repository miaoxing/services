<?php

namespace Miaoxing\Services;

use Miaoxing\Plugin\BasePlugin;
use Wei\Time;

/**
 * @mixin \CachePropMixin
 */
class ServicesPlugin extends BasePlugin
{
    protected $name = '通用服务';

    protected $description = '存放一些通用的功能，连接底层类库和上层业务';

    protected $code = 201;

    public function onSchedule()
    {
        $this->cache->set('schedule', [
            'lastRunAt' => Time::now(),
        ]);
    }
}
