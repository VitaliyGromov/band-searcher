<?php

namespace App\API\HhruApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Message;

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

    public function getRegionsInRussia(): mixed
    {
        try {
            $request = $this->hhRuApiClient->request('GET', 'areas/113'); // Russia's id is 113
        } catch (RequestException $e) {
            //TODO make logs
            echo Message::toString($e->getRequest());
            echo Message::toString($e->getResponse());
        }

        $respounse = json_decode($request->getBody()->getContents());

        return $respounse;
    }

    public function getCitiesByRegionId(int $regionId): mixed
    {
        try {
            $request = $this->hhRuApiClient->request('GET', "areas/$regionId");
        } catch (RequestException $e) {
            //TODO make logs
            echo Message::toString($e->getRequest());
            echo Message::toString($e->getResponse());
        }

        $respounse = json_decode($request->getBody()->getContents());

        return $respounse;
    }
}

?> 