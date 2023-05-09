<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class SkillSelect extends Component
{
    public $skills;

    protected $rules = [
        'skills.*.id' => 'required',
        'skills.*.name' => 'required',
    ];

    public function mount()
    {
        $this->skills = Skill::all();
    }

    public function render()
    {
        return view('livewire.skill-select');
    }
}
