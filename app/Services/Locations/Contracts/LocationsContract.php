<?php
declare(strict_types=1);

namespace App\Services\Locations\Contracts;

interface LocationsContract
{
    public function getRegions();

    public function getCitiesByRegionId(int $regionId);
}
