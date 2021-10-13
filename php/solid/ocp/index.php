<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

class Template
{
    public function render(IFormatter $formatter): void
    {
        echo $formatter->output() . PHP_EOL;
    }
}

$input = new CodeFormatter('<script>alert(1)</script>');
$template = new Template();
$template->render($input);