<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public static function getExperienceNameById(int $experienceId)
    {
        $arrayOfExperienceFields = self::where('id', $experienceId)->first()->toArray();

        return $arrayOfExperienceFields['name'];
    }

}
