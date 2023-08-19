<?php

declare(strict_types=1);

namespace App\Services;

use GuzzleHttp\Client;

class RegionsCitiesHttpClient
{
    private Client $regionsCitiesClient;

    private const BASE_URI = 'https://api.hh.ru';

    private const RUSSIA_ID = '113'; // Russia's id is 113

    public function __construct()
    {
        $this->regionsCitiesClient = new Client([
            'base_uri' => self::BASE_URI,
        ]);
    }

    public function getClient(): Client
    {
        return $this->regionsCitiesClient;
    }

    public function getRussiaId(): string
    {
        return self::RUSSIA_ID;
    }
}
