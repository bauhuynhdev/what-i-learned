<?php

class Chat implements IChatable
{
    protected $name = 'Chat';

    public function sendMessage(): string
    {
        return $this->name . ' sending message' . PHP_EOL;
    }
}