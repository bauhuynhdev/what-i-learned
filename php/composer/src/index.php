<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Bau\Composer\Core\MySql;
use Bau\Composer\Core\Query;
use Bau\Composer\Facade\DB;

$mysql = new MySql();
$mysql->setDatabase('demo');
Query::setDriver($mysql);
dd(DB::table('users')->offset(2)->limit(1)->get()->toArray());