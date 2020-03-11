<?php

namespace Miaoxing\Services\Model;

trait MineTrait
{
    protected $userIdColumn = 'user_id';

    protected static $mineCache;

    /**
     * QueryBuilder: 筛选属于当前登录用户的记录
     *
     * @return $this
     */
    public function mine()
    {
        return $this->andWhere([$this->userIdColumn => (int) wei()->curUserV2->id]);
    }

    /**
     * @return $this
     */
    public function findOrInitMine()
    {
        return $this->mine()->findOrInit();
    }

    /**
     * @return $this
     */
    public function findOrInitMineCached()
    {
        return static::$mineCache ? static::$mineCache : static::$mineCache = $this->findOrInitMine();
    }
}
