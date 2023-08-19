<?php

declare(strict_types=1);

namespace App\Services\Regions;

use App\Services\Regions\Contracts\RegionContract;
use App\Services\RegionsCitiesHttpClient as HttpClient;
use GuzzleHttp\Utils;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Throwable;

class RegionService implements RegionContract
{
    private HttpClient $httpClient;

    public function __construct()
    {
        $this->httpClient = new HttpClient();
    }

    public function getRegions(): array
    {
        try {
            if (Cache::has('regions')) {
                return Cache::get('regions');
            } else {

                $request = $this->httpClient->getClient()->request('GET', 'areas/'.$this->httpClient->getRussiaId());

                $regions = Utils::jsonDecode((string) $request->getBody(), true);

                Cache::put('regions', $regions['areas'], 60 * 60 * 24);

                return Cache::get('regions');
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());

            Redirect::with('error', $e->getMessage());

            return $regions = [];
        }
    }

    public function getRegionNameById(int $regionId): string
    {
        try {
            if (Cache::has("region_name_by_id_$regionId")) {
                return Cache::get("region_name_by_id_$regionId");
            } else {
                $request = $this->httpClient->getClient()->request('GET', "areas/$regionId");

                $region = Utils::jsonDecode((string) $request->getBody(), true);

                Cache::put("region_name_by_id_$regionId", $region['name'], 60 * 60 * 24);

                return $region['name'];
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());

            Redirect::with('error', $e->getMessage());

            return 'Произошла ошибка';
        }
    }
}
