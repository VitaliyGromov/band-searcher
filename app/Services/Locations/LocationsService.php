<?php
declare(strict_types=1);

namespace App\Services\Locations;

use GuzzleHttp\Utils;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\RequestException;
use App\Services\Locations\Contracts\LocationsContract;

class LocationsService implements LocationsContract
{
    private Client $locationsClient;
    
    private const BASE_URI = 'https://api.hh.ru';

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
            $russiaId = self::RUSSIA_ID;
            $request = $this->locationsClient->request('GET', "areas/$russiaId");
        } catch (RequestException $e) {
            Log::error($e->getMessage());
        }

        return Utils::jsonDecode((string)$request->getBody(), true);
    }

    public function getCitiesByRegionId(int $regionId): array
    {
        try {
            $request = $this->locationsClient->request('GET', "areas/$regionId");
        } catch (RequestException $e) {
            Log::error($e->getMessage());
        }

        return Utils::jsonDecode((string)$request->getBody(), true);
    }

    public function getRegionNameById(int $regionId): string
    {
        try {
            $request = $this->locationsClient->request('GET', "areas/$regionId");
        } catch (RequestException $e) {
            Log::error($e->getMessage());
        }

        $region = Utils::jsonDecode((string)$request->getBody(), true);

        return $region['name'];
    }

    public function getCityNameById(int $cityId, int $regionId): string
    {
        try{
            $cities = $this->getCitiesByRegionId($regionId);
        } catch(RequestException $e) {
            Log::error($e->getMessage());
        }

        foreach($cities['areas'] as $city){
            if($city['id'] == $cityId){
                return $city['name'];
            }
        }
    }
}