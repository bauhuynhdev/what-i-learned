<?php

interface Account
{
    public function setupAccount(): void;

    public function getUsername(): string;

    public function getPassword(): string;
}