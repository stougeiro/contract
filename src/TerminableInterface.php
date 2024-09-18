<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface TerminableInterface
    {
        public function terminate(): void;
    }