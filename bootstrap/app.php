<?php

require 'vendor/autoload.php';

$app = Foundation\Application\Application::getInstance();

$app->setBasePath(
    str_replace('/', DIRECTORY_SEPARATOR, $_SERVER['DOCUMENT_ROOT'])
);

$app->boot();

$app->singleton(
    Foundation\Contracts\Http\KernelContract::class,
    function ($app) {
        return new App\Http\Kernel($app, $app['route']);
    }
);

$app['session']->start();

$app->handle($app['request']);

return $app;