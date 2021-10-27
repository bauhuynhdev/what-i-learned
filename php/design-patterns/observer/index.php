<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$user = new User();
$userObserver = new UserObserver();
$user->attach($userObserver);

$user->setName('Bau');
$user->setName('Huynh');
$user->setName('Quang');