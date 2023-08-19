<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Services\Cities\Facades\CitiesFacade;
use App\Services\Regions\Facades\RegionsFacade;
use Livewire\Component;

class RegionCity extends Component
{
    public $russianRegions = [];

    public $citesByRegion = [];

    public $selectedRussianRegion = null;

    public $selectedCityByRegion = null;

    public function mount()
    {
        $this->russianRegions = RegionsFacade::getRegions();

        if (! is_null($this->selectedRussianRegion)) {
            $this->citesByRegion = CitiesFacade::getCitiesByRegionId($this->selectedRussianRegion);
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
            $this->citesByRegion = CitiesFacade::getCitiesByRegionId($region);
            $this->selectedCityByRegion = null;
        } else {
            return $this->selectedRussianRegion = null;
        }
    }
}
