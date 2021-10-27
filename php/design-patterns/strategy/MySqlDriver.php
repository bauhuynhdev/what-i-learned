<?php

class MySqlDriver implements IDriver
{
    public function connect()
    {
        echo 'MySQL connected' . PHP_EOL;
    }
}