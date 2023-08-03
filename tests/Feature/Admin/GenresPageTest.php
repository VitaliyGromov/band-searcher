<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenresPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_genres_page_returns_successful_respounse(): void
    {
        $response = $this->get('/admin/genres');

        $response->assertStatus(302);
    }
}
