<?php
declare(strict_types=1);

namespace App\Services\Locations;

use GuzzleHttp\Utils;
use GuzzleHttp\Client;
use App\Services\Locations\Contracts\LocationsContract;
use App\Services\Locations\Exceptions\LocationException;
use Illuminate\Support\Facades\Cache;
use Throwable;

class LocationsService implements LocationsContract
{
    private Client $locationsClient;
    
    private const BASE_URI = 'https://api.hh.ruo';

    private const RUSSIA_ID = '113'; // Russia's id is 113

    public function __construct()
    {
        $this->locationsClient = new Client([
            'base_uri' => self::BASE_URI,
        ]);
    }

    public function getRegions(): array
    {
        try {
            if (Cache::has('regions')) {
                return Cache::get('regions');

            } else{
                $russiaId = self::RUSSIA_ID;

                $request = $this->locationsClient->request('GET', "areas/$russiaId");

                $regions = Utils::jsonDecode((string)$request->getBody(), true);

                Cache::put('regions', $regions['areas']);

                return Cache::get('regions');
            }

        } catch (Throwable $e) {
            throw new LocationException($e->getMessage(), 0, $e);
        }
    }

    public function getCitiesByRegionId(int $regionId): array
    {
        try {
            if (Cache::has("cities_by_region_id_$regionId")) {
                return Cache::get("cities_by_region_id_$regionId");

            } else {
                $request = $this->locationsClient->request('GET', "areas/$regionId");

                $cities = Utils::jsonDecode((string)$request->getBody(), true);

                Cache::put("cities_by_region_id_$regionId", $cities['areas']);

                return $cities['areas'];
            }
            
        } catch (Throwable $e) {
            throw new LocationException($e->getMessage(), 0, $e);
        }
    }

    public function getRegionNameById(int $regionId): string
    {
        try {
            if (Cache::has("region_name_by_id_$regionId")) {
                return Cache::get("region_name_by_id_$regionId");

            } else {
                $request = $this->locationsClient->request('GET', "areas/$regionId");

                $region = Utils::jsonDecode((string)$request->getBody(), true);

                Cache::put("region_name_by_id_$regionId", $region['name']);

                return $region['name'];
            }
        

        } catch (Throwable $e) {
            throw new LocationException($e->getMessage(), 0, $e);
        }
    }

    public function getCityNameById(int $cityId, int $regionId): string
    {
        try{
            if (Cache::has("city_name_by_id_$cityId")) {
                return Cache::get("city_name_by_id_$cityId");
                
            } else {
                $cities = $this->getCitiesByRegionId($regionId);

                foreach($cities as $city){
                    if($city['id'] == $cityId){
                        return $city['name'];

                        Cache::put("city_name_by_id_$cityId", $city['name']);
                    }
                }
            }

        } catch(Throwable $e) {
            throw new LocationException($e->getMessage(), 0, $e);
        }
    }
}