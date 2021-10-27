<?php

class MongoDriver implements IDriver
{
    public function connect()
    {
        echo 'MongoDB connected' . PHP_EOL;
    }
}