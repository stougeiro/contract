<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface ModuleProviderInterface
    {
        public function configure(): void;
    }