<?php

class RedisDriver implements IDriver
{
    public function connect()
    {
        echo 'Redis connected' . PHP_EOL;
    }
}