<?php

class User implements SplSubject
{
    private $observer;

    private $name = '';

    public function __construct()
    {
        $this->observer = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observer->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observer->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update($this);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
        $this->notify();
    }
}