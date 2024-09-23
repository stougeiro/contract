<?php declare(strict_types=1);

    namespace STDW\Contract;

    use STDW\Container\Contract\ContainerInterface;
    use STDW\Container\Contract\ContainerUtilsTrait;


    abstract class AppAbstracted implements AppInterface, ContainerInterface
    {
        use ContainerUtilsTrait;


        public static AppAbstracted $instance;


        public static function getInstance(): AppAbstracted
        {
            return static::$instance;
        }

        abstract public function run(): void;
    }