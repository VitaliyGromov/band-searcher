<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;
use App\Models\User;

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

    public function test_admin_can_deactivate_user(): void
    {
        $this->actingAsAdmin();

        $user = User::factory()->create();

        $this->put("/admin/users/{$user->id}", ['active' => false]);

        $this->assertFalse($user->active);
    } //TODO fix this test
}
