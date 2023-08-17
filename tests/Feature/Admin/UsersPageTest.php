<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class UsersPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;

    public function test_only_admin_can_visit_users_page(): void
    {
        $this->actingAsAdmin();

        $response = $this->get('/admin/users');
        $response->assertStatus(200);

        $this->actingAsUser();

        $response = $this->get('/admin/users');
        $response->assertForbidden();
    }

    public function test_admin_can_deactive_user(): void
    {
        $this->actingAsAdmin();

        $user = User::factory()->create();

        $this->put("/admin/users/$user->id", ['active' => 0]);
        $this->assertFalse($user->active);
    }
}