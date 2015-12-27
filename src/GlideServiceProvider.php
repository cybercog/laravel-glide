<?php

namespace Spatie\Glide;

use Illuminate\Support\ServiceProvider;

class GlideServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('laravel-glide-image', function () {

            return new GlideImage();

        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-glide-image'];
    }
}