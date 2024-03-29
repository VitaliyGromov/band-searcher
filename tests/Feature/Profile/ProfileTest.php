<?php

declare(strict_types=1);

namespace Tests\Feature\Profile;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_profile_page_returns_successful_respounse(): void
    {
        $response = $this->get('/profile');

        $response->assertStatus(302);
    }
}
