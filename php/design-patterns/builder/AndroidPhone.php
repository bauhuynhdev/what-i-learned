<?php

class AndroidPhone implements IPhone
{
    private $chipset;

    private $memory;

    private $screen;

    private $model;

    public function chipset($chipset): IPhone
    {
        $this->chipset = $chipset;
        return $this;
    }

    public function memory($memory): IPhone
    {
        $this->memory = $memory;
        return $this;
    }

    public function screen($screen): IPhone
    {
        $this->screen = $screen;
        return $this;
    }

    public function factory(): string
    {
        return 'Phone information:' . PHP_EOL .
            'CPU: ' . $this->chipset . PHP_EOL .
            'RAM: ' . $this->memory . PHP_EOL .
            'DISPLAY: ' . $this->screen . PHP_EOL .
            'MODEL: ' . $this->model . PHP_EOL;
    }

    public function model($model): IPhone
    {
        $this->model = $model;
        return $this;
    }
}