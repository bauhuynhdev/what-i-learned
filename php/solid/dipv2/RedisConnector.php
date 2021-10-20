<?php

class RedisConnector implements IConnector
{
    public function connect(): void
    {
        echo 'Redis connected' . PHP_EOL;
    }

    public function query(): void
    {
        echo 'Redis exec query' . PHP_EOL;
    }

    public function close(): void
    {
        echo 'Redis closed' . PHP_EOL;
    }
}