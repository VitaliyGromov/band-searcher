<?php
declare(strict_types=1);

namespace App\Enums;

enum Experience: string
{
    case noExperience = 'no experience';
    case toOneYear = 'to 1 year';
    case fromOneToThreeYears = 'from 1 to 3 years';
    case fromThreeToFiveYears = 'from 3 to 5 years';
    case fromFiveYearsAndMore = 'from 5 years';

    public static function getAllExperiencesAsArray()
    {
        $experiences = [];

        foreach (Experience::cases() as $experience) {
            array_push($experiences, $experience);
        }

        return $experiences;
    }
}
