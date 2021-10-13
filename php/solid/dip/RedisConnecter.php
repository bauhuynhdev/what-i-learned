<?php

class RedisConnecter implements IConnecter
{
    public function connect(): void
    {
        echo 'Redis connected' . PHP_EOL;
    }
}