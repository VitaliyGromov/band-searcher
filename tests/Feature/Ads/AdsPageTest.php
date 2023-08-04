<?php

declare(strict_types=1);

namespace Tests\Feature\Ads;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdsPageTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_ads_page_returns_successful_respounse(): void
    {
        $response = $this->get('/ads');

        $response->assertOk();
    }
}
