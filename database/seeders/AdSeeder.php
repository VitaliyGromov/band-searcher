<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    public function run(): void
    {
        Ad::firstOrCreate([
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'salary' => fake()->numberBetween(1, 12000),
            'own_instrument' => false,
            'ready_to_tour' => true,
            'ready_to_move' => false,
            'own_music' => true,
            'cover_band' => false,
            'commercial_project' => true,
            'band_name' => fake()->company(),
            'vk' => 'https://vk.com',
            'youtube' => 'https://youtube',
            'description' => fake()->paragraph(12),
            'own_experience' => 1,
            'own_concert_experience' => 2,
            'applicant_experience' => 1,
            'applicant_concert_experience' => 1,
            'user_id' => 1,
            'genre_id' => 1,
            'region_id' => 1620,
            'city_id' => 4228,
            'status_id' => 3,
            'skill_id' => 1,
            'type' => false,
        ]);
    }
}
