<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\Regions\Contracts\RegionContract;
use App\Services\Regions\RegionService;
use Illuminate\Support\ServiceProvider;

class RegionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RegionContract::class, RegionService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
