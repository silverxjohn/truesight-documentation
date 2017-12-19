<?php

namespace Truesight\Documentation;

use Illuminate\Support\ServiceProvider;

class TruesightDocsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'documentations');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/truesight/documentation'),
            __DIR__.'/public' => base_path('resources/public/docs'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';

        $this->app->make('Truesight\Documentation\Controllers\DocumentationController');

    }
}
