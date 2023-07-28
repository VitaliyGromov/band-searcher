<?php

declare(strict_types=1);

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory, Filterable;

    protected $guarded = [];

    public static function getGenreNameById(int $genreId): string
    {
        $arrayOfGenreFields = self::where('id', $genreId)->first()->toArray();

        return $arrayOfGenreFields['name'];
    }
}
