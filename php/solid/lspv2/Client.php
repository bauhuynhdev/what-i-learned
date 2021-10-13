<?php

class Client
{
    protected $baseUrl = '';

    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function methodGet($url)
    {
        echo 'Getting for url: ' . $this->baseUrl . $url . PHP_EOL;
    }
}