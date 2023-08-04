<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersPageTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_admin_users_page_returns_successful_respounse(): void
    {
        $response = $this->get('/admin/users');

        $response->assertStatus(302);
    }
}
