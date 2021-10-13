<?php

class LocalAccount implements Account
{
    public $username;

    public $password;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setupAccount(): void
    {
        $this->username = 'local';
        $this->password = '123456';
    }
}