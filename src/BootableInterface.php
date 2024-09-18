<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface BootableInterface
    {
        public function boot(): void;
    }