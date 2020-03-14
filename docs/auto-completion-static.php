<?php

namespace Miaoxing\Services\Service;

interface Laravel
{
    /**
     * Bootstrap Laravel application
     *
     * @return $this
     * @api
     */
    public function bootstrap();

    /**
     * @return Application
     * @api
     */
    public function getApp();
}

if (0) {
    interface Laravel
    {
        /**
         * Bootstrap Laravel application
         *
         * @return $this
         * @api
         */
        public static function bootstrap();
    
        /**
         * @return Application
         * @api
         */
        public static function getApp();
    }
}

interface Migration
{
    /**
     * @param OutputInterface $output
     * @return $this
     * @api
     */
    public function setOutput(Symfony\Component\Console\Output\OutputInterface $output);

    /**
     * @api
     */
    public function migrate();

    /**
     * Rollback the last migration or to the specified target migration ID
     *
     * @param array $options
     * @api
     */
    public function rollback($options = []);

    /**
     * @param array $options
     * @throws \ReflectionException
     * @throws \Exception
     * @api
     */
    public function create($options);
}

if (0) {
    interface Migration
    {
        /**
         * @param OutputInterface $output
         * @return $this
         * @api
         */
        public static function setOutput(Symfony\Component\Console\Output\OutputInterface $output);
    
        /**
         * @api
         */
        public static function migrate();
    
        /**
         * Rollback the last migration or to the specified target migration ID
         *
         * @param array $options
         * @api
         */
        public static function rollback($options = []);
    
        /**
         * @param array $options
         * @throws \ReflectionException
         * @throws \Exception
         * @api
         */
        public static function create($options);
    }
}
