<?php declare(strict_types=1);

    namespace STDW\Contract;


    abstract class ModuleProviderAbstracted implements ModuleProviderInterface
    {
        protected AppInterface $app;


        public function __construct(AppInterface $app)
        {
            $this->app = $app;
        }


        abstract public function configure(): void;
    }