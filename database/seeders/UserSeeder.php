<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Виталий',
            'last_name' => 'Громов',
            'email' => 'gromov.vitaliy03@gmail.com',
            'email_verified_at' => now(),
            'phone' => '89373743794',
            'password' => Hash::make('qwert.ru228'),
        ]);

        $admin->assignRole('admin');

        User::factory(10)->create();
    }
}
