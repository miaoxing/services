<?php

namespace Miaoxing\Services\Service;

use Wei\Record;

class IsRecordExists extends \Wei\IsRecordExists
{
    /**
     * {@inheritdoc}
     */
    protected function doValidate($input)
    {
        if (!$this->table instanceof Record) {
            return parent::doValidate($input);
        }

        if ($this->field) {
            $this->table->andWhere([$this->field => $input]);
        }

        if (!$this->table->find()) {
            $this->addError('notFound');
            return false;
        } else {
            return true;
        }
    }
}
