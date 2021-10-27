<?php

class CinemaProxy extends Cinema
{
    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception('Do not accept this age');
        }
        parent::setAge($age);
    }

    public function watch()
    {
        if ($this->age === null) {
            throw new Exception('No age assigned to watch movies');
        }
        parent::watch();
    }
}