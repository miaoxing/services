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

    public const SEX_UNKNOWN = 0;

    public const SEX_MALE = 1;

    public const SEX_FEMALE = 2;

    protected $sexNames = [
        self::SEX_UNKNOWN => '未知',
        self::SEX_MALE => '男',
        self::SEX_FEMALE => '女',
    ];

    public function getName($id)
    {
        return $this->getConstName('sex', $id);
    }
}
