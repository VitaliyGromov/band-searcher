<?php
namespace App\Helpers;

use App\Models\Ad;
use App\Models\Genre;
use App\Models\Skill;

class AdFieldsHendler 
{
    private Ad $ad;

    public function __construct(Ad $ad)
    {
        $this->ad = $ad;
    }

    public function getGenreNameByIdInAd(): string
    {
        return Genre::getGenreNameById($this->ad->genre_id);
    }

    public function getSkillNameByIdInAd(): string
    {
        return Skill::getSkillNameById($this->ad->skill_id);
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

}