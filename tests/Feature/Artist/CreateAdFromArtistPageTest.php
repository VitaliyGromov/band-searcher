<?php

namespace Tests\Feature\Artist;

use Tests\TestCase;

class CreateAdFromArtistPageTest extends TestCase
{
    public function test_the_ads_artist_create_page_returns_successful_respounse(): void
    {
        $response = $this->get('/ads/create/artist');

        $response->assertStatus(302);
    }
}
