<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory, Filterable;

    protected $guarded = [];

    public static function getSkillNameById(int $skillId): string
    {
        $arrayOfSkillFields = self::where('id', $skillId)->first()->toArray();

        return $arrayOfSkillFields['name'];
    }
}
