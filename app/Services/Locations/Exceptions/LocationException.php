<?php
declare(strict_types=1);

namespace App\Services\Locations\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LocationException extends Exception
{
    public function report(): void
    {
        Log::error($this->getMessage());
        Session::flash('error', $this->getMessage());
    }
}