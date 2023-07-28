<?php

declare(strict_types=1);

namespace App\Services\Locations\Contracts;

interface LocationsContract
{
    public function getRegions(): array;

    public function getCitiesByRegionId(int $regionId): array;

    public function getRegionNameById(int $regionId): string;

    public function getCityNameById(int $cityId, int $regionId): string;
}
