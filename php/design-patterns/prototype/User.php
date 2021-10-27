<?php

class User
{
    private $name = 'User';

    public function __clone()
    {
        $this->setName('Copy of ' . $this->getName());
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}