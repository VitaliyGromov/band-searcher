<?php

namespace App\Http\Middleware;

use App\Services\Locations\Contracts\LocationsContract;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChangeIdToLocationNamesInRequest
{
    public function handle(Request $request, Closure $next): Response
    {
        $locations = app(LocationsContract::class);

        $regionName = $locations->getRegionNameById((int)$request->region);

        $cityName = $locations->getCityNameById((int)$request->city, (int)$request->region);

        $request->merge(['region' => $regionName, 'city' => $cityName]);

        return $next($request);
    }
}