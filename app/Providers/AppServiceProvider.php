<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(RegionsServiceProvider::class);
        $this->app->register(CitiesServiceProvider::class);
    }

    public function boot(): void
    {
        //
    }
}
