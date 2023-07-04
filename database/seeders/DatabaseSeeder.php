<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(RegionCitySeeder::class);
        $this->call(AdSeeder::class);
    }
}
