<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Region;
use Illuminate\Database\Seeder;
use App\API\HhruApi\HhRuApiClient;

class RegionCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hhRuApiClient = new HhRuApiClient();

        $regions = $hhRuApiClient->getRegionsInRussia();

        foreach($regions->areas as $region){
            Region::create([
                'id' => intval($region->id),
                'name' => $region->name,
            ]);

            $citiesByRegion = $hhRuApiClient->getCitiesByRegionId($region->id);

            foreach($citiesByRegion->areas as $city){
                City::create([
                    'id' => intval($city->id),
                    'name' => $city->name,
                    'region_id' => intval($city->parent_id),
                ]);
            }
        }

        City::create([
            'name' => 'Москва',
            'region_id' => '1',
        ]);
    }
}
