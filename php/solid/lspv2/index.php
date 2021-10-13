<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

function runCode(SlackClient $slackClient)
{
    $slackClient->setBaseUrl('https://google.com');
    $slackClient->methodGet('/me/getUpdate');
}

runCode(new SlackClient);
