<?php

namespace Miaoxing\Services\Service;

class Laravel
{
    /**
     * Bootstrap Laravel application
     *
     * @return $this
     * @api
     */
    public function bootstrap()
    {
    }

    /**
     * @return Application
     * @api
     */
    public function getApp()
    {
    }
}

if (0) {
    class Laravel
    {
        /**
         * Bootstrap Laravel application
         *
         * @return $this
         * @api
         */
        public static function bootstrap()
        {
        }
    
        /**
         * @return Application
         * @api
         */
        public static function getApp()
        {
        }
    }
}

class Migration
{
    /**
     * @param OutputInterface $output
     * @return $this
     * @api
     */
    public function setOutput(\Symfony\Component\Console\Output\OutputInterface $output)
    {
    }

    /**
     * @api
     */
    public function migrate()
    {
    }

    /**
     * Rollback the last migration or to the specified target migration ID
     *
     * @param array $options
     * @api
     */
    public function rollback($options = [])
    {
    }

    /**
     * @param array $options
     * @throws \ReflectionException
     * @throws \Exception
     * @api
     */
    public function create($options)
    {
    }
}

if (0) {
    class Migration
    {
        /**
         * @param OutputInterface $output
         * @return $this
         * @api
         */
        public static function setOutput(\Symfony\Component\Console\Output\OutputInterface $output)
        {
        }
    
        /**
         * @api
         */
        public static function migrate()
        {
        }
    
        /**
         * Rollback the last migration or to the specified target migration ID
         *
         * @param array $options
         * @api
         */
        public static function rollback($options = [])
        {
        }
    
        /**
         * @param array $options
         * @throws \ReflectionException
         * @throws \Exception
         * @api
         */
        public static function create($options)
        {
        }
    }
}

class Time
{
    /**
     * @return string
     * @api
     */
    public function now()
    {
    }

    /**
     * @return string
     * @api
     */
    public function today()
    {
    }
}

if (0) {
    class Time
    {
        /**
         * @return string
         * @api
         */
        public static function now()
        {
        }
    
        /**
         * @return string
         * @api
         */
        public static function today()
        {
        }
    }
}
