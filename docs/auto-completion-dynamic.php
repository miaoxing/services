<?php

namespace Miaoxing\Services\Service;

class Asset extends \Wei\Asset
{
}

class ClassMap extends \Wei\Base
{
}

class Coll extends \Miaoxing\Plugin\BaseService
{
}

class Convention extends \Miaoxing\Plugin\BaseService
{
}

class CsvExporter extends \Miaoxing\Plugin\BaseService
{
}

class Db extends \Wei\Db
{
}

class Http extends \Wei\Http
{
}

class IsRecordExists extends \Wei\Validator\RecordExists
{
}

class Laravel extends \Miaoxing\Plugin\BaseService
{
    /**
     * Bootstrap Laravel application
     *
     * @return $this
     * @see Laravel::bootstrap
     */
    public function bootstrap()
    {
    }

    /**
     * @return Application
     * @see Laravel::getApp
     */
    public function getApp()
    {
    }
}

class Logger extends \Wei\Logger
{
}

class Migration extends \Miaoxing\Plugin\BaseService
{
    /**
     * @param OutputInterface $output
     * @return $this
     * @see Migration::setOutput
     */
    public function setOutput(\Symfony\Component\Console\Output\OutputInterface $output)
    {
    }

    /**
     * @see Migration::migrate
     */
    public function migrate()
    {
    }

    /**
     * Rollback the last migration or to the specified target migration ID
     *
     * @param array $options
     * @see Migration::rollback
     */
    public function rollback($options = [])
    {
    }

    /**
     * @param array $options
     * @throws \ReflectionException
     * @throws \Exception
     * @see Migration::create
     */
    public function create($options)
    {
    }
}

class Page extends \Miaoxing\Plugin\BaseService
{
}

class Random extends \Miaoxing\Plugin\BaseService
{
}

class Request extends \Wei\Request
{
}

class Ret extends \Wei\Ret
{
}

class SexConst extends \Miaoxing\Plugin\BaseService
{
}

class Share extends \Miaoxing\Plugin\BaseService
{
}

class Status extends \Miaoxing\Plugin\BaseService
{
}

class Tester extends \Miaoxing\Plugin\BaseService
{
}

class Time extends \Miaoxing\Plugin\BaseService
{
    /**
     * @return string
     * @see Time::now
     */
    public function now()
    {
    }

    /**
     * @return string
     * @see Time::today
     */
    public function today()
    {
    }
}

class Url extends \Wei\Url
{
}

class V extends \Miaoxing\Plugin\BaseService
{
}

class View extends \Wei\View
{
}

class YesNoConst extends \Miaoxing\Plugin\BaseService
{
}
