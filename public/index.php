<?php

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$app->singleton(
    Foundation\Contracts\Http\KernelContract::class,
    function ($app) {
        return new App\Http\Kernel($app, $app['route']);
    }
);

$app['session']->start();
$app['session']->setPreviousUrl($app['request']->uri());

$app->handle($app['request']);