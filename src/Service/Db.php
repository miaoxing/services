<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\Service\WeiBaseModel;

/**
 * @property \Wei\BaseCache $cache
 */
class Db extends \Wei\Db
{
    /**
     * {@inheritdoc}
     */
    public function getTableFields($table, $withPrefix = false)
    {
        $fullTable = $withPrefix ? $table : $this->getTable($table);
        if (isset($this->tableFields[$fullTable])) {
            return $this->tableFields[$fullTable];
        } else {
            return (array) $this->cache->remember(
                'tableFields' . $this->dbname . '.' . $table,
                60,
                function () use ($table, $withPrefix) {
                    return parent::getTableFields($table, $withPrefix);
                }
            );
        }
    }

    /**
     * Init a model instance
     *
     * @param string $table The name of database table
     * @param array $attribuets The data for table record
     * @param bool $new Whether it's a new record and have not save to database
     * @return WeiBaseModel
     */
    public function init($table, $attribuets = [], $new = true)
    {
        $class = $this->getRecordClass($table);
        return new $class([
            'wei' => $this->wei,
            'db' => $this,
            'table' => $table,
            'new' => $new,
            'attributes' => $attribuets,
        ]);
    }
}
