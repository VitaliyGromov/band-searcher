<?php

declare(strict_types=1);

namespace App\Services\Regions\Contracts;

interface RegionContract
{
    public function getRegions(): array;

    public function getRegionNameById(int $regionId): string;
}
