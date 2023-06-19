<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdsPageTest extends TestCase
{
    public function test_the_ads_page_returns_successful_respounse(): void
    {
        $response = $this->get('/ads');

        $response->assertOk();
    }
}
