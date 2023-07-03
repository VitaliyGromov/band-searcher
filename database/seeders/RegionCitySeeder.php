<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\City;
use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionCitySeeder extends Seeder
{
    public function run(): void
    {
        $regions = [
            "Московская область",
            "Санкт-Петербург",
            "Нижегородская область",
            "Красноярский край",
            "Республика Татарстан",
            "Ростовская область",
            "Свердловская область",
            "Приморский край",
            "Краснодарский край",
            "Ханты-Мансийский автономный округ"
        ];

        $cities = [
            "Москва",
            "Санкт-Петербург",
            "Нижний Новгород",
            "Екатеринбург",
            "Красноярск",
            "Казань",
            "Ростов-на-Дону",
            "Владивосток",
            "Краснодар",
            "Тюмень"
        ];

        foreach($regions as $region){
            Region::create([
                'name' => $region,
            ]);
        }

        foreach($cities as $key => $value){
            City::create([
                'name' => $value,
                'region_id' => $key + 1,
            ]);
        }
    }
}
