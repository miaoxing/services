<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\ConstTrait;

/**
 * 性别常量服务
 */
class SexConst extends BaseService
{
    use ConstTrait;

    const SEX_MALE = 1;

    const SEX_FEMALE = 2;

    protected $sexNames = [
        self::SEX_MALE => '男',
        self::SEX_FEMALE => '女',
    ];

    public function getName($id)
    {
        return $this->getConstName('sex', $id);
    }
}
