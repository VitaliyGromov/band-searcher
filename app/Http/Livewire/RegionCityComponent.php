<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\HhruApi\HhRuApiClient;

class RegionCityComponent extends Component
{
    public $russianRegions;
    public $citesByRegion;

    public $selectedRussianRegion = NULL;
    public $selectedCityByRegion = NULL;

    private $hhRuApiClient;

    public function __construct()
    {
        $this->hhRuApiClient = new HhRuApiClient();
    }

    public function mount()
    {
        $this->hhRuApiClient = new HhRuApiClient();
        $russianRegions = $this->hhRuApiClient->getRegionsInRussia();

        $this->russianRegions = $russianRegions->areas;
        $this->citesByRegion = collect();
    }
    
    public function render()
    {
        return view('livewire.region-city-component');
    }

    public function updatedSelectedRussianRegion(int $regionId)
    {
        if(!is_null($regionId)){

            $citiesByRegionId = $this->hhRuApiClient->getCitiesByRegionId($regionId);

            $this->citesByRegion = $citiesByRegionId->areas;
            $this->selectedCityByRegion = null;

        }
    }
}
