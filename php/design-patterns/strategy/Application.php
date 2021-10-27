<?php

class Application
{
    private $driver;

    public function __construct(IDriver $driver)
    {
        $this->driver = $driver;
    }

    public function execute()
    {
        $this->driver->connect();
    }
}