<?php

namespace App\Providers;

use Foundation\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(base_path('routes/web.php'));
    }

    public function register()
    {
        
    }
}