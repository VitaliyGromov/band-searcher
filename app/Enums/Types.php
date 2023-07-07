<?php
declare(strict_types=1);

namespace App\Enums;

enum Types: string
{
    case fromArtist = 'from artist';
    case fromBand = 'from band';

    public static function getAllTypesAsArray()
    {
        $types = [];

        foreach (Types::cases() as $type) {
            array_push($types, $type);
        }

        return $types;
    }
}