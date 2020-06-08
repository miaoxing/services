<?php

namespace Miaoxing\Services\Service;

class Request extends \Wei\Request
{
    public function json()
    {
        return $this->acceptJson();
    }

    public function csv()
    {
        return 'csv' == $this['_format'];
    }
}
