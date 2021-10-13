<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

function runCode()
{
    $repository = new EmailRepository;
    $reportRepository = new ReportRepository($repository);
    echo $reportRepository->count() . PHP_EOL;
}

runCode();