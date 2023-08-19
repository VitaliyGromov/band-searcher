<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\Cities\CitiesService;
use App\Services\Cities\Contracts\CitiesContract;
use Illuminate\Support\ServiceProvider;

class CitiesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CitiesContract::class, CitiesService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
