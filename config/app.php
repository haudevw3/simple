<?php

return [
    
    'providers' => [
        Foundation\Auth\AuthServiceProvider::class,
        Foundation\Cookie\CookieServiceProvider::class,
        Foundation\Database\DatabaseServiceProvider::class,
        Foundation\Log\LogServiceProvider::class,
        Foundation\Session\SessionServiceProvider::class,
        Foundation\Routing\RoutingServiceProvider::class,
        Foundation\Validation\ValidationServiceProvider::class,
        Foundation\View\ViewServiceProvider::class
    ]
];