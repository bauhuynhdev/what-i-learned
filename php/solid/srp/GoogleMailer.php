<?php

class GoogleMailer implements IMailer
{
    public function send($email): void
    {
        echo 'Google sending to: ' . $email . PHP_EOL;
    }
}