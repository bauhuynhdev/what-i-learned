<?php

class Authenticator
{
    private $account;

    public function __construct(Account $account)
    {
        $this->account = $account;
        $this->account->setupAccount();
    }

    public function login()
    {
        $username = $this->account->getUsername();
        $password = $this->account->getPassword();
        echo "Log in to an account with information: {$username}/{$password}" . PHP_EOL;
    }
}