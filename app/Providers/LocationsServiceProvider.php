<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\Locations\Contracts\LocationsContract;
use App\Services\Locations\LocationsService;
use Illuminate\Support\ServiceProvider;

class LocationsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(LocationsContract::class, LocationsService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
