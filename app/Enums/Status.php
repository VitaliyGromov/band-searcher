<?php

declare(strict_types=1);

namespace App\Enums;

enum Status: string
{
    case active = 'active';
    case closed = 'closed';
    case underReview = 'under review';
    case canceled = 'canceled';

    public static function getAllStatusesAsArray(): array
    {
        $statuses = [];

        foreach (Status::cases() as $status) {
            array_push($statuses, $status);
        }

        return $statuses;
    }
}
