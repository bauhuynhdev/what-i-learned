<?php

class LaptopRepository implements IRepository
{
    public function all(): array
    {
        return [
            1 => 'Dell',
            2 => 'Acer',
            3 => 'Macbook'
        ];
    }
}