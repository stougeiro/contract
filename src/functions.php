<?php declare(strict_types=1);

    use STDW\Contract\App;


    if ( ! function_exists('app'))
    {
        function app(): App
        {
            return App::getInstance();
        }
    }