<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface AppInterface extends RegisterableInterface, BootableInterface, TerminableInterface
    {
        public static function getInstance(): AppInterface;

        public function run(): void;
    }