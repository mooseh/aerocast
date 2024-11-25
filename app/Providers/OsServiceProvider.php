<?php

namespace App\Providers;

use App\Facades\OS\OS;
use Illuminate\Support\ServiceProvider;

class OsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('os', function () {
            return new OS();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
