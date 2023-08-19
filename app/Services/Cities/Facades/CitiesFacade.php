<?php

declare(strict_types=1);

namespace App\Services\Cities\Facades;

use App\Services\Cities\Contracts\CitiesContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array getCitiesByRegionId(int $regionId)
 * @method statis strig getCityNameById()
 *
 * @see App\Services\CitiesService
 */
class CitiesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CitiesContract::class;
    }
}
