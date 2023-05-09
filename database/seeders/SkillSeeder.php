<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Акустическая гитара', 
            'Классическая гитара', 
            'Электрогитара', 
            'Бас гитара', 
            'Барабаны', 
            'Клавишный синтезатор', 
            'Фортепиано', 
            'Эстрадный вокал',
            'Эстардный вокал(владене техниками расщепления)',
            'Академический вокал',
            'Скрипка',
            'Виолончель',
            'Контрабас',
            'Альт',
            'Флейта',
            'Саксофон',
            'Труба',
            'Тромбон',
            'Звукорежиссер',
            'DJ',
            'Автор текстов',
            'Менеджер',
            'Директор',
        ];

        foreach($skills as $skill){
            Skill::firstOrCreate([
                'name' => $skill,
            ]);
        }
    }
}
