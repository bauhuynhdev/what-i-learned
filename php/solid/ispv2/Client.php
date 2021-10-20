<?php

class Client implements Userable, Clientable
{

    public function like()
    {
        echo 'Like post' . PHP_EOL;
    }

    public function share()
    {
        echo 'Share post' . PHP_EOL;
    }

    public function login(): void
    {
        echo 'Client login' . PHP_EOL;
    }

    public function read(): void
    {
        echo 'Client read post' . PHP_EOL;
    }
}