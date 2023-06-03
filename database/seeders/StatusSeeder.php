<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = ['активно', 'закрыто', 'на проверке', 'отклонено'];

        foreach($statuses as $status){
            Status::firstOrCreate([
                'name' => $status,
            ]);
        }
    }
}
