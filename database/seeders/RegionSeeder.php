<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use App\Services\HhruApi\HhRuApiClient;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        $hhRuApiClient = new HhRuApiClient();

        $regions = $hhRuApiClient->getRegionsInRussia();

        foreach($regions->areas as $region){
            Region::create([
                'id' => intval($region->id),
                'name' => $region->name,
            ]);
        }
    }
}
