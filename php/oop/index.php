<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$mysql = new MySql();
$mysql->setDatabase('demo');
Query::setDriver($mysql);
try {
    $query = DB::table('users')->get();
    echo $query->toJson();
} catch (DBException $e) {
    echo 'DBException';
} catch (QueryException $e) {
    echo 'QueryException';
} catch (Exception $e) {
    echo 'Exception';
}