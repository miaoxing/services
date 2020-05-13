<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Raven\Service\Raven;

/**
 * @mixin \SessionMixin
 * @property Logger $errorLogger
 * @property Raven $raven
 * @todo 引入新的 sentry
 */
class Logger extends \Wei\Logger
{
    /**
     * @var string
     */
    protected $dir = 'data/logs';

    /**
     * 引到error.logger服务的最低级别
     *
     * @var string
     */
    protected $proxyLevel = 'info';

    /**
     * 上报到Sentry的最低级别
     *
     * @var string
     */
    protected $reportLevel = 'info';

    /**
     * 将日志的等级转换为Raven的日志等级
     *
     * @var array
     * @link https://github.com/Seldaek/monolog/blob/master/src/Monolog/Handler/RavenHandler.php
     */
    protected $ravenLevels = [
        'notice' => 'info',
        'critical' => 'fatal',
        'alert' => 'fatal',
        'emergency' => 'fatal',
    ];

    /**
     * @inheritDoc
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);

        // 创建默认的错误日志配置
        if (!$this->wei->getConfig('error.logger')) {
            $this->wei->setConfig('error.logger', [
                'dir' => 'data/logs',
                'fileFormat' => '\e\r\r\o\r-Ymd.\l\o\g',
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
        // 将较高级别的日志,引到error.logger服务
        if ($fromErrorLogger || ($this->levels[$level] ?? 0) < $this->levels[$this->proxyLevel]) {
            return parent::log($level, $message, $context);
        } else {
            return $this->errorLogger->log($level, $message, $context, true);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function writeLog($level, $message, $context)
    {
        $result = parent::writeLog($level, $message, $context);
        $this->sendToRaven($level, $message, $context);
        return $result;
    }

    protected function sendToRaven($level, $message, $context)
    {
        // 1. 检查有raven服务才上报日志
        if (!isset($this->raven) && !$this->wei->has('raven')) {
            return;
        }

        // 2. 只有日志等级大于指定等级时,发送到Sentry
        if ($this->levels[$level] < $this->levels[$this->reportLevel]) {
            return;
        }

        // 3. 准备日志内容
        $params = $this->formatParams($message, $context);
        $level = isset($this->ravenLevels[$level]) ? $this->ravenLevels[$level] : $level;
        $options = ['extra' => $params['context'], 'level' => $level];

        // 上报时可能已经在错误流程中,所以通过session获取,尽可能减少依赖,减少再次出错的机会
        if (session_status() == PHP_SESSION_ACTIVE && isset($this->session['user']['id'])) {
            $options['user'] = $this->session['user'];
        }

        // 4. 根据类型上报日志
        if ($message instanceof \Exception) {
            $this->raven->captureException($message, $options);
        } else {
            $this->raven->captureMessage($params['message'], [], $options);
        }
    }
}
