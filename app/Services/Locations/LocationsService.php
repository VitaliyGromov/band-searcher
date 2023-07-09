<?php
declare(strict_types=1);

namespace App\Services\Locations;

use App\Services\Locations\Contracts\LocationsContract;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Utils;

class LocationsService implements LocationsContract
{
    private Client $hhRuApiClient;
    
    private const BASE_URI = 'https://api.hh.ru';

    public function __construct()
    {
        $this->hhRuApiClient = new Client([
            'base_uri' => self::BASE_URI,
        ]);
    }

    public function getRegions(): array
    {
        try {
            $request = $this->hhRuApiClient->request('GET', 'areas/113'); // Russia's id is 113
        } catch (RequestException $e) {
            //TODO make logs
            echo Message::toString($e->getRequest());
            echo Message::toString($e->getResponse());
        }

        return Utils::jsonDecode((string)$request->getBody(), true);
    }

    public function getCitiesByRegionId(int $regionId)
    {
        try {
            $request = $this->hhRuApiClient->request('GET', "areas/$regionId");
        } catch (RequestException $e) {
            //TODO make logs
            echo Message::toString($e->getRequest());
            echo Message::toString($e->getResponse());
        }

        return Utils::jsonDecode((string)$request->getBody(), true);
    }
}