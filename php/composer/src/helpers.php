<?php

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $var) {
            echo php_sapi_name() === 'cli' ? '===============================' . PHP_EOL : '<pre>';
            var_export($var);
        }
        die();
    }
}