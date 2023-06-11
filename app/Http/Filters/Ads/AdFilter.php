<?php
namespace App\Http\Filters\Ads;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class AdFilter extends AbstractFilter
{
    public const APPLICANT_EXPERIENCE = 'applicant_experience';

    public const APPLICANT_EXPERIENCE_CONCERT_EXPERIENCE = 'applicant_concert_experience';

    public const OWN_MUSIC = 'own_music';

    public const COVER_BAND = 'cover_band';

    public const COMMERCIAL_PROJECT = 'commercial_project';

    public const SALARY = 'salary';

    public const REGION_ID = 'region_id';

    public const CITY_ID = 'city_id';
    
    public function getCallbacks(): array
    {
        return [
            self::APPLICANT_EXPERIENCE => [$this, 'applicantExperience'],
            self::APPLICANT_EXPERIENCE_CONCERT_EXPERIENCE => [$this, 'applicantConcertExperience'],
            self::OWN_MUSIC => [$this, 'ownMusic'],
            self::COVER_BAND => [$this, 'coverBand'],
            self::SALARY => [$this, 'salary'],
            self::REGION_ID => [$this, 'regionId'],
            self::CITY_ID => [$this, 'cityId'],
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

    public function ownMusic(Builder $builder, $value)
    {
        $builder->where('own_music', $value);
    }

    public function coverBand(Builder $builder, $value)
    {
        if($value == 'true'){
            $value = true;
        } else {
            $value = false;
        }

        $builder->where('cover_band', $value);
    }

    public function salary(Builder $builder, $value)
    {
        $builder->where('salary', $value);
    }

    public function regionId(Builder $builder, $value)
    {
        $builder->where('region_id', $value);
    }

    public function cityId(Builder $builder, $value)
    {
        $builder->where('city_id', $value);
    }
}

?>