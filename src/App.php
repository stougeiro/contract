<?php declare(strict_types=1);

    namespace STDW\Contract;


    abstract class App implements AppInterface
    {
        public static App $instance;


        public static function getInstance(): App
        {
            return static::$instance;
        }

        abstract public function run(): void;
    }