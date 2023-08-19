<?php

declare(strict_types=1);

namespace App\Services\Regions\Facades;

use App\Services\Regions\Contracts\RegionContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array getRegions()
 * @method statis string getRegionNameById()
 *
 * @see App\Services\Regions\RegionService
 */
class RegionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return RegionContract::class;
    }
}
