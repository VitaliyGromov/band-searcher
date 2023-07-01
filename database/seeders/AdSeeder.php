<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Region;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    public function run(): void
    {
        Ad::factory(10)->create();
    }
}
