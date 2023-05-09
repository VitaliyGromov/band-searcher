<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experience = ['Нет опыта', 'до 1 года', 'от 1 - до 3 лет', 'от 3 - до 5 лет', 'более 5 лет'];

        foreach($experience as $experienceValue){
            Experience::firstOrCreate([
                'name' => $experienceValue,
            ]);
        }
    }
}
