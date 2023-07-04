<?php

namespace Database\Factories;

use App\Enums\Experience as EnumsExperience;
use App\Enums\Status as EnumsStatus;
use App\Models\Genre;
use App\Models\Region;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    public function definition(): array
    {
        $region = Region::get()->random();
        $cityId = $region->cities->random()->id;

        $statuses = EnumsStatus::getAllStatusesAsArray();
        $experiences = EnumsExperience::getAllExperiencesAsArray();

        return [
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'salary' => fake()->numberBetween(1, 12000),
            'own_instrument' => fake()->boolean(),
            'ready_to_tour' => fake()->boolean(),
            'ready_to_move' => fake()->boolean(),
            'own_music' => fake()->boolean(),
            'cover_band' => fake()->boolean(),
            'commercial_project' => true,
            'band_name' => fake()->company(),
            'vk' => 'https://vk.com',
            'youtube' => 'https://youtube',
            'description' => fake()->paragraph(12),
            'own_experience' => $experiences[array_rand($experiences)],
            'own_concert_experience' => $experiences[array_rand($experiences)],
            'applicant_experience' => $experiences[array_rand($experiences)],
            'applicant_concert_experience' => $experiences[array_rand($experiences)],
            'user_id' => User::all('id')->random()->id,
            'genre_id' => Genre::all('id')->random()->id,
            'region_id' => $region->id,
            'city_id' => $cityId,
            'status' => $statuses[array_rand($statuses)],
            'skill_id' => Skill::all('id')->random()->id,
            'type' => fake()->boolean(),
        ];
    }
}
