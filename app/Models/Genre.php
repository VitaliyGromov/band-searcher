<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public static function getGenreNameById(int $genreId): string
    {
        $arrayOfGenreFields = self::where('id', $genreId)->first()->toArray();

        return $arrayOfGenreFields['name'];
    }
}
