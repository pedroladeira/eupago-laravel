<?php

namespace PedroLadeira\Eupago;

use Illuminate\Support\ServiceProvider;

class EupagoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Eupago::class, function () {
            return new Eupago;
        });

        $this->app->alias(Eupago::class, 'eupago-laravel');
    }
}
