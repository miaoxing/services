<?php

namespace Miaoxing\Services\Migration;

use Wei\Schema;
use Wei\Base;
use Wei\Db;

/**
 * @property \Wei\Schema $schema
 * @property Db $db
 */
abstract class BaseMigration extends Base
{
    /**
     * Run the migration.
     */
    public function up()
    {
    }

    /**
     * Revert the migration.
     */
    public function down()
    {
    }
}
