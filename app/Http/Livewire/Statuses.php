<?php

namespace App\Http\Livewire;

use App\Enums\Status;
use Livewire\Component;

class Statuses extends Component
{
    public $statuses;

    public function mount()
    {
        $this->statuses = Status::getAllStatusesAsArray();
    }

    public function render()
    {
        return view('livewire.statuses');
    }
}
