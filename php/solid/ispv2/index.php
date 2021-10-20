<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

function runCode(Client $client)
{
    $client->login();
    $client->read();
    $client->share();
}

runCode(new Client);