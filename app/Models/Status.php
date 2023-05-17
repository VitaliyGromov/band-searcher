<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public static function getStatusIdByStatusName(string $statusName):int
    {
        return self::where('name', $statusName)->id;
    }
}
