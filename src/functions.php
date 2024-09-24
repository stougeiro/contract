<?php declare(strict_types=1);

    use STDW\Contract\AppAbstracted;


    if ( ! function_exists('app'))
    {
        function app(): AppAbstracted
        {
            return AppAbstracted::getInstance();
        }
    }


    defined('ROOT') or define('ROOT', null);
    defined('CONFIG') or define('CONFIG', null);

    // environment

    if ( ! function_exists('env'))
    {
        function env(string $path): mixed
        {
            static $items = [];

            if ( ! empty($items)) {
                goto item;
            }


            $path = explode('.', $path);
            $filename = 'env';
            $extension = '.php';

            $file = ROOT . $filename.$extension;

            if ( ! file_exists($file)) {
                throw new InvalidArgumentException("Env: File '{$file}' do not exists");
            }

            $items = include $file;


            item: 

            $item = $items;

            foreach ($path as $segment) {
                $item = &$item[$segment];

                if ( ! isset($item)) {
                    throw new InvalidArgumentException("Env: Item '{$path}' can not be found");
                }
            }

            return $item;
        }
    }

    // config

    if ( ! function_exists('config'))
    {
        function config(string $path): mixed
        {
            static $items = [];

            $path = explode('.', $path);
            $filename = $path[0];
            $extension = '.php';

            if (isset($items[$filename])) {
                goto item;
            }


            $file = CONFIG . $filename.$extension;

            if ( ! file_exists($file)) {
                throw new InvalidArgumentException("Config: File '{$file}' do not exists");
            }

            $items[$filename] = include $file;


            item:

            $item = $items;

            foreach ($path as $segment) {
                $item = &$item[$segment];

                if ( ! isset($item)) {
                    throw new InvalidArgumentException("Config: Item '{$path}' can not be found");
                }
            }

            return $item;
        }
    }