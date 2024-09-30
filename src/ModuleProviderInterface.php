<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface ModuleProviderInterface extends RegisterableInterface
    {
        public function configure(): void;
    }