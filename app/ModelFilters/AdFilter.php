<?php

declare(strict_types=1);

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class AdFilter extends ModelFilter
{
    public function type(string $type): static
    {
        return $this->where('type', $type);
    }

    public function status(string $status): static
    {
        return $this->where('status', $status);
    }

    public function region(int $id): static
    {
        return $this->where('region', $id);
    }

    public function city(int $id): static
    {
        return $this->where('city', $id);
    }

    public function applicantExperience(string $applicantExperience): static
    {
        return $this->where('applicant_experience', $applicantExperience);
    }

    public function applicantConcertExperience(string $applicantConcertExperience): static
    {
        return $this->where('applicant_concert_experience', $applicantConcertExperience);
    }

    public function skill(int $id): static
    {
        return $this->where('skill_id', $id);
    }

    public function genre(int $id): static
    {
        return $this->where('genre_id', $id);
    }

    public function bandName(string $bandName): static
    {
        return $this->where('band_name', 'ILIKE', "%$bandName%");
    }

    public function salary(int $salary): static
    {
        return $this->where('salary', $salary);
    }

    public function ownInstrument(int $ownInstrument): static
    {
        return $this->where('own_instrument', (bool) $ownInstrument);
    }

    public function readyToMove(int $readyToMove): static
    {
        return $this->where('ready_to_move', (bool) $readyToMove);
    }

    public function readyToTour(int $readyToTour): static
    {
        return $this->where('ready_to_tour', (bool) $readyToTour);
    }

    public function ownMusic(int $ownMusic): static
    {
        return $this->where('own_music', (bool) $ownMusic);
    }

    public function coverBand(int $coverBand): static
    {
        return $this->where('cover_band', (bool) $coverBand);
    }

    public function commercialProject(int $commercialProject): static
    {
        return $this->where('commercial_project', (bool) $commercialProject);
    }
}
