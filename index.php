<?php

require __DIR__.'/vendor/autoload.php';

try {
    $app = \PhpBoot\Application::createByDefault(__DIR__.'/config/config.php');
    $app->loadRoutesFromPath(__DIR__.'/App/Controllers', 'App\\Controllers'); //

    $app->dispatch();
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}

