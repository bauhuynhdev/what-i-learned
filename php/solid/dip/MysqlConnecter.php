<?php

class MysqlConnecter implements IConnecter
{
    public function connect(): void
    {
        echo 'Mysql connected' . PHP_EOL;
    }
}