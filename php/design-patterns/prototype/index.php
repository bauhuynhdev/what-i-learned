<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$user = new User();
echo $user->getName() . PHP_EOL;
$police = clone $user;
echo $police->getName() . PHP_EOL;
$police->setName('Police');
echo $police->getName() . PHP_EOL;