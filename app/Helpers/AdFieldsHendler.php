<?php
namespace App\Helpers;

use App\Models\Ad;

class AdFieldsHendler 
{
    private Ad $ad;

    public function __construct(Ad $ad)
    {
        $this->ad = $ad;
    }

    public function isOwnMusic(): string
    {
        return yesOrNo($this->ad->own_music);
    }

    public function isCoverBand(): string
    {
        return yesOrNo($this->ad->cower_band);
    }

    public function isCommercialProject(): string
    {
        return yesOrNo($this->ad->commercial_project);
    }

    public function isOwnInstrument(): string
    {
        return yesOrNo($this->ad->own_instrument);
    }

    public function isReadyToTour(): string
    {
        return yesOrNo($this->ad->ready_to_tour);
    }

    public function isReadyToMove():string
    {
        return yesOrNo($this->ad->ready_to_move);
    }

    public function handleType(): string
    {
        return $this->ad->type ? 'от ариста' : 'от группы';
    }
}