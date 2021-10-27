<?php

/**
 * @method static Query table(string $tableName)
 */
class DB
{
    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws DBException
     */
    public static function __callStatic($name, $arguments)
    {
        if (!method_exists(Query::class, $name)) {
            throw new DBException();
        }

        return Query::$instance->{$name}(...$arguments);
    }
}