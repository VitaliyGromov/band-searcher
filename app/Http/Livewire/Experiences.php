<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Enums\Experience;
use Livewire\Component;

class Experiences extends Component
{
    public $experiences;

    public $experienceName;

    public $selectedExperience;

    public function mount()
    {
        $this->experiences = Experience::getAllExperiencesAsArray();
    }

    public function render()
    {
        return view('livewire.experiences');
    }
}
