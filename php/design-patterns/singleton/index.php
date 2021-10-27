<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$logger = Logger::getInstance();
$logger->setPath('/usr/sbin/logger');
$logger2 = Logger::getInstance();
$logger2->setPath('/var/log/logger');