<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface AppInterface extends MacroableInterface, RegisterableInterface, BootableInterface, TerminableInterface
    {
        public function run(): void;
    }