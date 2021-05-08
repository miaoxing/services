<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\ConstTrait;

/**
 * 是否常量服务
 */
class YesNoConst extends BaseService
{
    use ConstTrait;

    public const YES_NO_YES = 1;

    public const YES_NO_NO = 0;

    protected $yesNoNames = [
        self::YES_NO_YES => '是',
        self::YES_NO_NO => '否',
    ];

    public function getLabel($id)
    {
        return $this->getConstName('yes_no', $id);
    }
}
