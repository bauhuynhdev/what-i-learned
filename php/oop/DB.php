<?php

/**
 * @method static Query table(string $tableName)
 */
class DB
{
    public static function __callStatic($name, $arguments)
    {
        return Query::$instance->{$name}(...$arguments);
    }
}