<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;

class UsersPageTest extends TestCase
{
    public function test_the_admin_users_page_returns_successful_respounse(): void
    {
        $response = $this->get('/admin/users');

        $response->assertStatus(302);
    }
}
