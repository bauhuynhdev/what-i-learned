<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

function runCode(IConnector $IConnector)
{
    $IConnector->connect();
    $IConnector->query();
    $IConnector->close();
}

runCode(new MySQLConnector());