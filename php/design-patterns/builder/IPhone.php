<?php

interface IPhone
{
    public function chipset($chipset): IPhone;

    public function memory($memory): IPhone;

    public function screen($screen): IPhone;

    public function model($model): IPhone;

    public function factory(): string;
}