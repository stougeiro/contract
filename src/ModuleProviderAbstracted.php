<?php declare(strict_types=1);

    namespace STDW\Contract;


    abstract class ModuleProviderAbstracted implements ModuleProviderInterface
    {
        protected AppAbstracted $app;


        public function __construct(AppAbstracted $app)
        {
            $this->app = $app;
        }


        abstract public function configure(): void;
    }