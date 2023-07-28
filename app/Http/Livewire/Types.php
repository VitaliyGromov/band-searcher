<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Enums\Types as EnumsTypes;
use Livewire\Component;

class Types extends Component
{
    public $types;
    public $selectedType;

    public function mount()
    {
        $this->types = EnumsTypes::getAllTypesAsArray();
    }

    public function render()
    {
        return view('livewire.types');
    }
}
