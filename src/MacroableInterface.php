<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface MacroableInterface
    {
        public static function macro(string $name, object|callable $macro): void;

        public static function hasMacro(string $name): bool;

        public function __call($method, $parameters);

        public static function __callStatic($method, $parameters);
    }