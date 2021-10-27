<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

function clientCode(IPhone $phone)
{
    echo $phone
        ->chipset('Snapdragon 845')
        ->memory('6GB')
        ->screen('LCD IPS')
        ->model('Xiaomi PocoPhone F1')
        ->factory();
}

clientCode(new AndroidPhone());