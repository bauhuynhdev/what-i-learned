<?php

class MailGunMailer implements IMailer
{

    public function send($email): void
    {
        echo 'MailGun sending to: ' . $email . PHP_EOL;
    }
}