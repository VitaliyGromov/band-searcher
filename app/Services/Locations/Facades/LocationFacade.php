<?php

declare(strict_types=1);

namespace App\Services\Locations\Facades;

use App\Services\Locations\Contracts\LocationsContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array getRegions()
 * @method static array getCitiesByRegionId(int $regionId)
 * @method statis string getRegionNameById()
 * @method statis strig getCityNameById()
 *
 * @see App\Services\Locations\LocationsService
 */
class LocationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LocationsContract::class;
    }
}
