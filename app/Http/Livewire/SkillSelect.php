<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillSelect extends Component
{
    public $skills;

    public function mount()
    {
        $this->skills = Skill::all();
    }

    public function render()
    {
        return view('livewire.skill-select');
    }
}
//TODO тут какую-то валидацию хочет