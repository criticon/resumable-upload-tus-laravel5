<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TusPhp\Tus\Server as TusServer;

class TusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('tus-server', function ($app) {
            $server = new TusServer();

            $server
                ->setApiPath('/tus') // tus server endpoint.
                ->setUploadDir(storage_path('app/public/uploads')); // uploads dir.

            return $server;
        });
    }
}
