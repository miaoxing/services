<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseService;
use Miaoxing\Services\ConstTrait;

/**
 * 是否常量服务
 */
class YesNoConst extends BaseService
{
    use ConstTrait;

    const YES_NO_YES = 1;

    const YES_NO_NO = 0;

    protected $yesNoTable = [
        self::YES_NO_YES => [
            'label' => '是',
        ],
        self::YES_NO_NO => [
            'label' => '否',
        ],
    ];

    public function getLabel($id)
    {
        return $this->getConstLabel('yes_no', $id);
    }
}
