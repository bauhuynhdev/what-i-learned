<?php

interface IMailer
{
    public function send($email): void;
}