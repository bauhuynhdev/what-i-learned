<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

function runCode()
{
    $account = new LocalAccount();
    $authenticator = new Authenticator($account);
    $authenticator->login();
}

runCode();