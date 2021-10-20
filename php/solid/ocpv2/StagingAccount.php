<?php

class StagingAccount implements Account
{
    private $username;

    private $password;

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
        $this->username = 'staging';
        $this->password = '123456';
    }
}