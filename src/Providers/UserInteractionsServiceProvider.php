<?php

namespace LaravelSchema\UserInteractions;

use Illuminate\Support\ServiceProvider;

class UserInteractionsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/interactions.php' => config_path('interactions.php'),
        ]);
    }
    public function register()
    {
        
    }
}