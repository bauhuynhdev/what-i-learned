<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

function clientCode(IConnecter $connecter)
{
    $connecter->connect();
}

clientCode(new RedisConnecter);