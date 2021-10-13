<?php

class XSSFormatter implements IFormatter
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function output(): string
    {
        return str_replace(['<script>', '</script>'], '', $this->text);
    }
}