<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;

class AdsPageTest extends TestCase
{
    public function test_the_admin_ads_page_returns_successful_respounse(): void
    {
        $response = $this->get('/admin/ads');

        $response->assertStatus(302);
    }
}
