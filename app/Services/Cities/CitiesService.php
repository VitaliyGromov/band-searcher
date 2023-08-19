<?php

declare(strict_types=1);

namespace App\Services\Cities;

use App\Services\Cities\Contracts\CitiesContract;
use App\Services\RegionsCitiesHttpClient as HttpClient;
use GuzzleHttp\Utils;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Throwable;

class CitiesService implements CitiesContract
{
    private HttpClient $httpClient;

    public function __construct()
    {
        $this->httpClient = new HttpClient();
    }

    public function getCitiesByRegionId(int $regionId): array
    {
        try {
            if (Cache::has("cities_by_region_id_$regionId")) {
                return Cache::get("cities_by_region_id_$regionId");
            } else {
                $request = $this->httpClient->getClient()->request('GET', "areas/$regionId");

                $cities = Utils::jsonDecode((string) $request->getBody(), true);

                Cache::put("cities_by_region_id_$regionId", $cities['areas'], 60 * 60 * 24);

                return $cities['areas'];
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());

            Redirect::with('error', $e->getMessage());

            return $cities = [];
        }
    }

    public function getCityNameById(int $cityId, int $regionId): string
    {
        try {
            if (Cache::has("city_name_by_id_$cityId")) {
                return Cache::get("city_name_by_id_$cityId");
            } else {
                $cities = $this->getCitiesByRegionId($regionId);

                foreach ($cities as $city) {
                    if ($city['id'] == $cityId) {

                        Cache::put("city_name_by_id_$cityId", $city['name'], 60 * 60 * 24);

                        return $city['name'];
                    }
                }
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());

            Redirect::with('error', $e->getMessage());
        }

        return 'Произошла ошибка';
    }
}
