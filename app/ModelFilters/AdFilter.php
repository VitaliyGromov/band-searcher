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
        return $this->where('region_id', $id);
    }

    public function city(int $id): static
    {
        return $this->where('city_id', $id);
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
        return $this->where('band_name', $bandName);
    }

    public function salary(int $salary)
    {
        return $this->where('salary', $salary);
    }
}