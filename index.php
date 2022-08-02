<?php

require __DIR__.'/vendor/autoload.php';

$app = \PhpBoot\Application::createByDefault(__DIR__.'/config/config.php');
$app->loadRoutesFromPath(__DIR__.'/App/Controllers', 'App\\Controllers'); //

$app->dispatch();
