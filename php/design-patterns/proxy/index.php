<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$cinema = new Cinema();
$cinema->setAge(8);
$cinema->watch();
$proxy = new CinemaProxy();
$proxy->setAge(18);
$proxy->watch();
