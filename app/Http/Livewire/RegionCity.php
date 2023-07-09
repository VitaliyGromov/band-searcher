<?php

namespace App\Http\Livewire;

use App\Services\Locations\Contracts\LocationsContract;
use Livewire\Component;

class RegionCity extends Component
{
    public $russianRegions;
    public $citesByRegion;

    public $selectedRussianRegion;
    public $selectedCityByRegion;

    public function mount(LocationsContract $locations)
    {
        $this->russianRegions = $locations->getRegions()['areas'];
        $this->citesByRegion = NULL;
    }
    
    public function render()
    {
        return view('livewire.region-city');
    }

    public function updatedSelectedRussianRegion($regionId)
    {
        if($regionId){

            $locations = app(LocationsContract::class);

            $citiesByRegionId = $locations->getCitiesByRegionId($regionId)['areas'];

            $this->citesByRegion = $citiesByRegionId;
            $this->selectedCityByRegion = NULL;

        } else {
            return $this->selectedRussianRegion = NULL;
        }
    }
}
