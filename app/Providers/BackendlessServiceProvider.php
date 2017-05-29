<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use backendless\Backendless;

class BackendlessServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        $config = $this->app->config->get('backendless');

        //use config() and make this more elegant;

        Backendless::initApp(
            env('BACKENDLESS_APPLICATION_ID'),
            env('BACKENDLESS_SECRET_KEY'),
            env('BACKENDLESS_VERSION')
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            //
        ];
    }
}
