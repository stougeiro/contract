<?php declare(strict_types=1);

    namespace STDW\Contract;


    abstract class ServiceProviderAbstracted implements ServiceProviderInterface
    {
        protected AppAbstracted $app;


        public function __construct(AppAbstracted $app)
        {
            $this->app = $app;
        }


        abstract public function register(): void;

        abstract public function boot(): void;

        abstract public function terminate(): void;
    }