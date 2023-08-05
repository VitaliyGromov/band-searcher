<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class UsersPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;

    public function test_only_admin_can_visit_users_page()
    {
        $admin = $this->admin();

        $this->actingAs($admin);

        $response = $this->get('/admin/users');
        $response->assertStatus(200);

        $user = $this->user();

        $this->actingAs($user);

        $response = $this->get('/admin/users');
        $response->assertForbidden();
    }
}
