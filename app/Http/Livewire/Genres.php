<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Genre;
use Livewire\Component;

class Genres extends Component
{
    public $genres;
    public $selectedGenreId;

    public function mount()
    {
        $this->genres = Genre::all();
    }

    public function render()
    {
        return view('livewire.genres');
    }
}
