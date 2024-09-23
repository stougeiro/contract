<?php declare(strict_types=1);

    use STDW\Contract\AppAbstracted;


    if ( ! function_exists('app'))
    {
        function app(): AppAbstracted
        {
            return AppAbstracted::getInstance();
        }
    }