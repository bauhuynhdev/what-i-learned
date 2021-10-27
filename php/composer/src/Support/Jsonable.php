<?php

namespace Bau\Composer\Support;

interface Jsonable
{
    public function toJson(): string;
}