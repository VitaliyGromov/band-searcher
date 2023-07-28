<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    public $skills;
    public $selectedSkillId;

    public function mount()
    {
        $this->skills = Skill::all();
    }

    public function render()
    {
        return view('livewire.skills');
    }
}
