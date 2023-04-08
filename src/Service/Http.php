<?php

namespace Miaoxing\Services\Service;

use Wei\Ret;
use Wei\RetTrait;

class Http extends \Wei\Http
{
    use RetTrait;

    /**
     * 返回 ret 格式的 HTTP 请求结果
     *
     * @param array $data
     * @return Ret
     */
    public function toRet(array $data = [])
    {
        if ($this->isSuccess()) {
            $response = $this->getResponse();
            $extra = is_array($response) ? $response : ['data' => $response];
            return $this->suc($data + $extra);
        }

        $e = $this->getErrorException();
        return $this->err($data + ['code' => $e->getCode(), 'message' => $e->getMessage()]);
    }
}
