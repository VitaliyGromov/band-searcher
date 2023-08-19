<?php

declare(strict_types=1);

namespace App\Services\Cities\Contracts;

interface CitiesContract
{
    public function getCitiesByRegionId(int $regionId): array;

    public function getCityNameById(int $cityId, int $regionId): string;
}
