<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public static function getRegionNameById(int $regionId): string
    {
        $arrayOfRegionFields = self::where('id', $regionId)->first()->toArray();

        return $arrayOfRegionFields['name'];
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'region_id', 'id');
    }
}
