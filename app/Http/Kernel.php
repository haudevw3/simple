<?php

namespace App\Http;

use Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [];
    protected $middlewareGroups = [];
    protected $routeMiddleware = [];
}