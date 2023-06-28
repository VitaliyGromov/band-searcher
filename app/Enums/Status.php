<?php
namespace App\Enums;

enum Status: int
{
    case ACTIVE = 1;
    case CLOSED = 2;
    case UNDER_REVIEW = 3;
    case CANCELED = 4;
}

?>