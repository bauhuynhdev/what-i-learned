<?php

class Logger
{
    static private $instance;
    private $path;

    static public function getInstance(): Logger
    {
        if (static::$instance === null) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    public function getPath($path): string
    {
        return $this->path;
    }

    public function setPath($path): void
    {
        if ($this->path === null) {
            $this->path = $path;
        } else {
            echo 'Path has been set' . PHP_EOL;
        }
    }
}