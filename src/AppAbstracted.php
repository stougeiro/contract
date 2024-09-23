<?php declare(strict_types=1);

    namespace STDW\Contract;


    abstract class AppAbstracted implements AppInterface
    {
        public static AppAbstracted $instance;


        public static function getInstance(): AppAbstracted
        {
            return static::$instance;
        }

        abstract public function run(): void;
    }