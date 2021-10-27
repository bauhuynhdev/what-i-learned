<?php

namespace Bau\Composer\Support;

interface DBDriver
{
    public function getConnect();

    public function setConnect($params = []): void;

    public function runConnect(): void;

    public function __call($name, $arguments);
}