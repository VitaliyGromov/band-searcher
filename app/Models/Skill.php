<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public static function getSkillNameById(int $skillId): string
    {
        $arrayOfSkillFields = self::where('id', $skillId)->first()->toArray();

        return $arrayOfSkillFields['name'];
    }
}
