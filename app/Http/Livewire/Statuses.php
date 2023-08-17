<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Enums\Status;
use Livewire\Component;

class Statuses extends Component
{
    public $statuses;

    public $selectedStatus;

    public function mount()
    {
        $this->statuses = Status::getAllStatusesAsArray();
    }

    public function render()
    {
        return view('livewire.statuses');
    }

    public function updatedSelectedStatus($status)
    {
        $this->emit('statusChanged', $status);
    }
}
