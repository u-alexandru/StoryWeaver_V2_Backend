<?php

namespace Ungureanu\SimpleLaravelWebauthn\Providers;

use Illuminate\Support\ServiceProvider;

class SimpleLaravelWebauthnServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/webauthn.php', 'simple-laravel-webauthn');
    }
}
