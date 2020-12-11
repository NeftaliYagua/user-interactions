<?php

namespace LaravelSchema\Interaction;

use Illuminate\Support\ServiceProvider;

class InteractionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/interaction.php' => config_path('interaction.php'),
        ]);
    }
    public function register()
    {
        
    }
}