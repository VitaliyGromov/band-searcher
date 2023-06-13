<?php
namespace App\Http\Filters\Ads;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class AdFilter extends AbstractFilter
{
    public function getCallbacks(): array
    {
        return [
            'applicant_experience' => [$this, 'applicantExperience'],
            'applicant_concert_experience' => [$this, 'applicantConcertExperience'],

            'region_id' => [$this, 'regionId'],
            'city_id' => [$this, 'cityId'],

            'skill_id' => [$this, 'skillId'],
            'genre_id' => [$this, 'genreId'],

            'cover_band' => [$this, 'coverBand'],
            'own_music' => [$this, 'ownMusic'],
            'commercial_project' => [$this, 'commercialProject'],

            'own_instrument' => [$this, 'ownInstrument'],
            'ready_to_tour' => [$this, 'readyToTour'],
            'ready_to_move' => [$this, 'readyToMove'],

            'salary' => [$this, 'salary'],

            'type' => [$this, 'type'],
        ];
    }

    public function applicantExperience(Builder $builder, $value)
    {
        $builder->where('applicant_experience', $value);
    }

    public function applicantConcertExperience(Builder $builder, $value)
    {
        $builder->where('applicant_concert_experience', $value);
    }

    public function regionId(Builder $builder, $value)
    {
        $builder->where('region_id', $value);
    }

    public function cityId(Builder $builder, $value)
    {
        $builder->where('city_id', $value);
    }

    public function skillId(Builder $builder, $value)
    {
        $builder->where('skill_id', $value);
    }

    public function genreId(Builder $builder, $value)
    {
        $builder->where('genre_id', $value);
    }

    public function coverBand(Builder $builder, $value)
    {
        $builder->where('cover_band', filter_var($value, FILTER_VALIDATE_BOOLEAN));
    }

    public function ownMusic(Builder $builder, $value)
    {
        $builder->where('own_music', filter_var($value, FILTER_VALIDATE_BOOLEAN));
    }

    public function commercialProject(Builder $builder, $value)
    {
        $builder->where('commercial_project', filter_var($value, FILTER_VALIDATE_BOOLEAN));
    }

    public function ownInstrument(Builder $builder, $value)
    {
        $builder->where('own_instrument', filter_var($value, FILTER_VALIDATE_BOOLEAN));
    }

    public function readyToTour(Builder $builder, $value)
    {
        $builder->where('readu_to_tour', filter_var($value, FILTER_VALIDATE_BOOLEAN));
    }

    public function readyToMove(Builder $builder, $value)
    {
        $builder->where('ready_to_move', filter_var($value, FILTER_VALIDATE_BOOLEAN));
    }

    public function salary(Builder $builder, $value)
    {
        $builder->where('salary', $value);
    }

    public function type(Builder $builder, $value)
    {
        $builder->where('type', filter_var($value, FILTER_VALIDATE_BOOLEAN));
    }
}

?>