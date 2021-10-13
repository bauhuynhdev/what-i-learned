<?php

interface IConnector
{
    public function connect(): void;

    public function query(): void;

    public function close(): void;
}