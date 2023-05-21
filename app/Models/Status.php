<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public static function getStatusIdByStatusName(string $statusName):int
    {
        $arrayOfStatusFields = self::where('name', $statusName)->first()->toArray();

        $statusId = $arrayOfStatusFields['id'];

        return $statusId;
    }
}
