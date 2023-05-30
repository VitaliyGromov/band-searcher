<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public static function getCityNameById(int $cityId): string
    {
        $arrayOfCityFields = self::where('id', $cityId)->first()->toArray();

        return $arrayOfCityFields['name'];
    }
}
