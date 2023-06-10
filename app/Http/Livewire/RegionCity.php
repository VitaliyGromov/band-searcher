<?php

namespace App\Http\Livewire;

use App\Models\Region;
use App\Models\City;
use Livewire\Component;


class RegionCity extends Component
{
    public $russianRegions;
    public $citesByRegion;

    public $selectedRussianRegion = NULL;
    public $selectedCityByRegion = NULL;

    public function mount()
    {
        $this->russianRegions = Region::all();
        $this->citesByRegion = City::all();
    }
    
    public function render()
    {
        return view('livewire.region-city');
    }

    public function updatedSelectedRussianRegion($regionId)
    {
        if($regionId){

            $citiesByRegionId = City::where('region_id', $regionId)->get();

            $this->citesByRegion = $citiesByRegionId;
            $this->selectedCityByRegion = NULL;

        } else {
            return $this->selectedRussianRegion = NULL;
        }
    }
}
