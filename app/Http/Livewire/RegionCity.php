<?php

namespace App\Http\Livewire;

use App\Services\Locations\Facades\LocationFacade;
use Livewire\Component;

class RegionCity extends Component
{
    public $russianRegions;
    public $citesByRegion;

    public $selectedRussianRegion = NULL;
    public $selectedCityByRegion = NULL;

    public function mount()
    {
        $this->russianRegions = LocationFacade::getRegions();

        if (!is_null($this->selectedRussianRegion)) {
            $this->citesByRegion = LocationFacade::getCitiesByRegionId($this->selectedRussianRegion);
        } else {
            $this->citesByRegion = [];
        }
    }
    
    public function render()
    {
        return view('livewire.region-city');
    }

    public function updatedSelectedRussianRegion($region)
    {
        if ($region) {
            $this->citesByRegion = LocationFacade::getCitiesByRegionId($region);
            $this->selectedCityByRegion = NULL;
        } else {
            return $this->selectedRussianRegion = NULL;
        }
    }
}
