<?php

declare(strict_types=1);

namespace Tests\Feature\Ads;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdsPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_ads_page_returns_successful_response(): void
    {
        $response = $this->get('/ads');
        $response->assertOk();
    }

    public function test_create_ad_from_artist_page_returns_successfull_response(): void
    {
        $response = $this->get('/ads/create/artist');
        $response->assertStatus(302);
    }

    public function test_create_ad_from_band_page_returns_successfull_response(): void
    {
        $response = $this->get('/ads/create/band');
        $response->assertStatus(302);
    }
}
