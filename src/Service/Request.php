<?php

namespace Miaoxing\Services\Service;

class Request extends \Wei\Request
{
    public function __construct(array $options = array())
    {
        parent::__construct($options);

        if (false !== strpos($this->getServer('HTTP_CONTENT_TYPE'), 'application/json')) {
            $this->data += (array) json_decode($this->getContent(), true);
        }
    }

    public function json()
    {
        return $this->acceptJson();
    }

    public function csv()
    {
        return 'csv' == $this['_format'];
    }
}
