<?php

namespace Database\Seeders;

use App\Models\City;
use App\Services\HhruApi\HhRuApiClient;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        // $hhRuApiClient = new HhRuApiClient();

        // $cities = [];

        // $regions = $hhRuApiClient->getRegionsInRussia();

        // foreach($regions->areas as $region){
        //     $citiesByRegion = $hhRuApiClient->getCitiesByRegionId($region->id);

        //     foreach($citiesByRegion->areas as $city){
        //         array_push($cities, $city);
        //     }
        // }

        // foreach($cities as $city){
        //     City::create([
        //         'id' => intval($city->id),
        //         'name' => $city->name,
        //         'region_id' => intval($city->parent_id),
        //     ]);
        // }

        City::create([
            'name' => 'Москва',
            'region_id' => '1',
        ]);
    }
}
