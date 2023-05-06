<?php

namespace App\Services\HhruApi;

use GuzzleHttp\Client;
use \Psr\Http\Message\ResponseInterface;

class HhRuApiClient 
{
    private Client $hhRuApiClient;
    
    private const BASE_URI = 'https://api.hh.ru';

    public function __construct()
    {
        $this->hhRuApiClient = new Client([
            'base_uri' => self::BASE_URI,
        ]);
    }

    public function getRegions(): mixed
    {
        $request = $this->hhRuApiClient->request('GET', 'areas/113');

        $respounse = json_decode($request->getBody()->getContents());

        return $respounse;
    }

    public function getCitiesByRegionId(int $regionId): mixed
    {
        $request = $this->hhRuApiClient->request('GET', "areas/$regionId");

        $respounse = json_decode($request->getBody()->getContents());

        return $respounse;
    }
}
?>