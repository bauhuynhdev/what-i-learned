<?php

class MySQLConnector implements IConnector
{
    public function connect(): void
    {
        echo 'MySQL connected' . PHP_EOL;
    }

    public function query(): void
    {
        echo 'MySQL exec query' . PHP_EOL;
    }

    public function close(): void
    {
        echo 'MySQL closed' . PHP_EOL;
    }
}