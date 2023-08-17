<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(LocationsServiceProvider::class);
    }

    public function boot(): void
    {
        //
    }
}
