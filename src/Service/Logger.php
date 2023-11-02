<?php

namespace Miaoxing\Services\Service;

/**
 * @property Logger $errorLogger
 */
class Logger extends \Wei\Logger
{
    /**
     * @var string
     */
    protected $dir = 'storage/logs';

    /**
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * 引到 errorLogger 服务的最低级别
     *
     * @var string
     */
    protected $proxyLevel = 'info';

    /**
     * {@inheritdoc}
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);

        // 创建默认的错误日志配置
        if (!$this->wei->getConfig('error:logger')) {
            $this->wei->setConfig('error:logger', [
                'dir' => $this->dir,
                'fileFormat' => '\e\r\r\o\r' . $this->fileFormat,
            ]);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @param bool $fromErrorLogger 是否来自error.logger对象
     */
    public function log($level, $message, $context = [], $fromErrorLogger = false)
    {
        // 将较高级别的日志,引到 errorLogger 服务
        if ($fromErrorLogger || ($this->levels[$level] ?? 0) < $this->levels[$this->proxyLevel]) {
            return parent::log($level, $message, $context);
        } else {
            return $this->errorLogger->log($level, $message, $context, true);
        }
    }

    protected function formatLog($level, $message, $context = [])
    {
        // Format message and content
        if (!is_array($context)) {
            $context = ['context' => $context];
        }
        $params = $this->formatParams($message, $context + $this->context);

        $params = array_merge([
            'level' => strtoupper($level),
            'message' => $params['message'],
            'time' => date($this->dateFormat, time()),
            'channel' => $this->namespace,
        ], $params);

        return json_encode($params, \JSON_UNESCAPED_SLASHES | \JSON_UNESCAPED_UNICODE) . "\n";
    }
}
