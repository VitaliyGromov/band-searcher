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
            'phone' => '89373743794',
            'password' => Hash::make('qwert.ru228'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Джеймс',
            'last_name' => 'Хетфилд',
            'email' => 'james@hatfields.com',
            'phone' => '89345672312',
            'password' => Hash::make('metallica'),
        ]);

        $user->assignRole('user');
    }
}
