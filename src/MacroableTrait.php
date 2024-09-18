<?php declare(strict_types=1);

    namespace STDW\Contract;

    use Closure;
    use BadMethodCallException;


    trait MacroableTrait
    {
        protected static array $macros = [];


        public static function macro(string $name, object|callable $macro): void
        {
            static::$macros[$name] = $macro;
        }

        public static function hasMacro(string $name): bool
        {
            return isset(static::$macros[$name]);
        }

        public function __call($method, $parameters)
        {
            if ( ! static::hasMacro($method)) {
                throw new BadMethodCallException("Method {$method} does not exist.");
            }

            $macro = static::$macros[$method];

            if ($macro instanceof Closure) {
                return call_user_func_array($macro->bindTo($this, static::class), $parameters);
            }

            return call_user_func_array($macro, $parameters);
        }

        public static function __callStatic($method, $parameters)
        {
            if ( ! static::hasMacro($method)) {
                throw new BadMethodCallException("Method {$method} does not exist.");
            }

            $macro = static::$macros[$method];

            if ($macro instanceof Closure) {
                return call_user_func_array(Closure::bind($macro, null, static::class), $parameters);
            }

            return call_user_func_array($macro, $parameters);
        }
    }