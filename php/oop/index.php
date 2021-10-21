<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$mysql = new MySql();
$mysql->setDatabase('demo');
Query::setDriver($mysql);
$query = DB::table('users')->get();
var_dump($query->toJson());