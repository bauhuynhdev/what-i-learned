<?php

class CodeFormatter implements IFormatter
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function output(): string
    {
        return '<code>' . $this->text . '</code>';
    }
}