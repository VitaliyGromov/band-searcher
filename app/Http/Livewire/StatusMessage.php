<?php

namespace App\Http\Livewire;

use App\Enums\Status;
use App\Models\User;
use Livewire\Component;

class StatusMessage extends Component
{
    public $status;

    public User $user;

    public $class = 'd-none';

    protected $listeners = ['statusChanged' => 'statusChanged'];

    public function statusChanged($status)
    {
        $this->status = $status;

        if ($this->status == Status::canceled->value) {
            $this->class = '';
        } else {
            $this->class = 'd-none';
        }
    }

    public function render()
    {
        return view('livewire.status-message', [
            'name' => $this->user->name,
            'lastName' => $this->user->last_name,
        ]);
    }
}
