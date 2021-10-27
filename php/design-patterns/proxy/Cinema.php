<?php

class Cinema implements ICinema
{
    protected $age;

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function watch()
    {
        echo $this->age . ' is watching' . PHP_EOL;
    }
}