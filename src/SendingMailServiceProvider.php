<?php

namespace Knowproinsighter\Sendingmails;

use Illuminate\Support\ServiceProvider;

class SendingMailServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->make('Knowproinsighter\Sendingmails\SendingMailController');
    }
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'sendingmails');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/Sendingmails'),
        ]);
    }
}
