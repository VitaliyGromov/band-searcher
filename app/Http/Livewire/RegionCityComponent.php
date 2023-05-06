<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegionCityComponent extends Component
{
    public $region;
    public $city;

    public $selectedRegion = NULL;
    public $selectedCity = NULL;
    
    public function render()
    {
        return view('livewire.region-city-component');
    }
}
