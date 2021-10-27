<?php

namespace Bau\Composer\Core;

use Bau\Composer\Support\Arrayable;
use Bau\Composer\Support\Jsonable;

class QueryFormatter implements Jsonable, Arrayable
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return (array)$this->data;
    }

    public function toJson(): string
    {
        return json_encode($this->data);
    }
}