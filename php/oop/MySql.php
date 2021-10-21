<?php

/**
 * @method void setHost(string $host)
 * @method void setPort(string $port)
 * @method void setUser(string $username)
 * @method void setPassword(string $password)
 * @method void setDatabase(string $database)
 */
class MySql implements DBDriver
{
    private $host = '127.0.0.1';
    private $port = '3306';
    private $user = 'root';
    private $password = 'none';
    private $database = '';
    /** @var mysqli */
    private $connect;

    public function getConnect(): mysqli
    {
        return $this->connect;
    }

    public function setConnect($params = []): void
    {
        if (isset($params['host'])) {
            $this->host = $params['host'];
        }
        if (isset($params['port'])) {
            $this->port = $params['port'];
        }
        if (isset($params['user'])) {
            $this->user = $params['user'];
        }
        if (isset($params['password'])) {
            $this->password = $params['password'];
        }
        if (isset($params['database'])) {
            $this->database = $params['database'];
        }
    }

    public function __call($name, $arguments)
    {
        $name = str_replace('set', '', mb_strtolower($name));
        $this->{$name} = $arguments[0];
    }

    public function runConnect(): void
    {
        $this->connect = new mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
    }

    public function __destruct()
    {
        $this->connect->close();
    }
}