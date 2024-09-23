<?php declare(strict_types=1);

    namespace STDW\Contract;

    use STDW\Container\Contract\ContainerUtilsTrait;


    abstract class AppAbstracted implements AppInterface
    {
        use ContainerUtilsTrait;


        public static AppAbstracted $instance;


        public static function getInstance(): AppAbstracted
        {
            return static::$instance;
        }

        abstract public function run(): void;
    }