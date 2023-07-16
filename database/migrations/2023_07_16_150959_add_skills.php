<?php

use App\Models\Skill;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public array $skills = [
        'Акустическая гитара', 
        'Классическая гитара', 
        'Электрогитара', 
        'Бас гитара',
        'Домра',
        'Балалайка',
        'Барабаны', 
        'Клавишный синтезатор', 
        'Фортепиано', 
        'Эстрадный вокал',
        'Эстардный вокал(владение техниками расщепления)',
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
        'Менеджер группы',
        'Директор группы',
        'SMM-специалист',
    ];

    public function up(): void
    {
        foreach($this->skills as $skill){
            Skill::create(['name' => $skill]);
        }
    }

    public function down(): void
    {
        foreach(Skill::all() as $skill){
            $skill->delete();
        }
    }
};
