<?php

class SlackClient extends Client
{
    public function methodPost($url)
    {
        echo 'Posting data for url: ' . $this->baseUrl . $url . PHP_EOL;
    }
}