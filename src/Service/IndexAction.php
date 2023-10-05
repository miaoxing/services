<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Services\Action\BaseAction;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Wei\BaseController;
use Wei\Req;

class IndexAction extends BaseAction
{
    /**
     * Change number more than 12 characters to string, because excel displays it in scientific notation
     *
     * @internal
     */
    protected const MAX_NUMBER_LENGTH = 12;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array
     */
    protected $columns = [];

    /**
     * @var int
     */
    protected $maxLimit = 10000;

    /**
     * @param BaseController $controller
     * @return mixed
     * @svc
     */
    protected function exec(BaseController $controller)
    {
        // 1. 构建查询
        $models = $this->convention->createModel($controller);
        $models->setReq($this->req);

        $this->triggerRet('beforeFind', [$models, $this->req]);

        $this->triggerRet('beforeReqQuery', [$models, $this->req]);

        $include = $controller->getOption('include');
        $models->setReqRelations($include ?: [])->reqQuery();

        $this->isExport() && $models->limit($this->maxLimit);
        $this->triggerRet('afterReqQuery', [$models, $this->req]);

        $models->all();
        $this->trigger('afterFind', [$models, $this->req]);

        $this->includeModel($controller, $models);

        // 2. 组装返回数据
        if ($this->isExport()) {
            $this->responseXlsx($models);
            return;
        }
        return $this->responseRet($models);
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function getMaxLimit(): int
    {
        return $this->maxLimit;
    }

    public function setMaxLimit(int $maxLimit): self
    {
        $this->maxLimit = $maxLimit;
        return $this;
    }

    protected function responseFormat($models)
    {
        switch ($this->req['format']) {
            case 'xlsx':
                $this->responseXlsx($models);
                return;

            default:
                return $this->responseRet($models);
        }
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function beforeReqQuery(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function afterReqQuery(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function beforeFind(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function afterFind(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function buildData(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    /**
     * @param callable $callable
     * @return $this
     * @svc
     */
    protected function buildRet(callable $callable)
    {
        return $this->on(__FUNCTION__, $callable);
    }

    protected function triggerBuildData($model)
    {
        return $this->trigger('buildData', [$model]) ?: [];
    }

    protected function triggerBuildRet($ret, BaseModel $models, Req $req)
    {
        return $this->trigger('buildRet', [$ret, $models, $req]) ?: $ret;
    }

    protected function includeModel(BaseController $controller, BaseModel $models)
    {
        $models->load($controller->getOption('include'));
    }

    /**
     * @param BaseModel|BaseModel[] $models
     */
    protected function responseRet(BaseModel $models)
    {
        $data = [];
        /** @var BaseModel $model */
        foreach ($models as $model) {
            $data[] = array_merge($model->toArray(), $this->triggerBuildData($model));
        }

        return $this->triggerBuildRet($models->toRet(['data' => $data]), $models, $this->req);
    }

    /**
     * @param BaseModel|BaseModel[] $models
     * @internal
     */
    protected function responseXlsx(BaseModel $models)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $startRow = '1';
        $startColumn = 'A';
        foreach ($this->columns as $column) {
            $sheet->setCellValue($startColumn . $startRow, $column['title']);
            ++$startColumn;
        }

        foreach ($models as $model) {
            ++$startRow;
            $startColumn = 'A';
            foreach ($this->columns as $column) {
                $this->setCellValue($sheet, $startColumn . $startRow, $this->getValue($model, $column));
                ++$startColumn;
            }
        }

        $fileName = $this->name . '-' . date('Y-m-d-H-i-s');
        $res = $this->res;
        $res->setHeader([
            'Content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment;filename=' . $fileName . '.xlsx',
            'Access-Control-Expose-Headers' => 'Content-Disposition',
        ]);
        $res->sendHeader();
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }

    /**
     * @return bool
     * @internal
     */
    protected function isExport(): bool
    {
        return 'xlsx' === $this->req['format'];
    }

    /**
     * @param mixed $model
     * @param mixed $column
     * @internal
     */
    protected function getValue($model, $column)
    {
        if (!isset($column['index'])) {
            $value = null;
        } elseif (is_string($column['index'])) {
            $value = $model->get($column['index']);
        } else {
            $value = $this->getValueByPaths($model, $column['index']);
        }

        if (isset($column['render'])) {
            return $column['render']($value, $model);
        }

        return $value;
    }

    /**
     * @internal
     */
    protected function getValueByPaths(BaseModel $value, array $paths)
    {
        foreach ($paths as $path) {
            $value = $value->get($path, $exists, false);
            if (!$exists) {
                return null;
            }
            if (!$value) {
                return $value;
            }
        }
        return $value;
    }

    /**
     * @param mixed $position
     * @param mixed $value
     * @internal
     */
    protected function setCellValue(Worksheet $sheet, $position, $value)
    {
        if (strlen($value) >= static::MAX_NUMBER_LENGTH && is_numeric($value)) {
            $sheet->setCellValueExplicit($position, $value, DataType::TYPE_STRING);
        } else {
            $sheet->setCellValue($position, $value);
        }
    }
}
