<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class GenresPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;

    public function test_only_admin_can_visit_genres_page(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin);

        $response = $this->get('/admin/genres');
        $response->assertStatus(200);

        $user = $this->user();

        $this->actingAs($user);

        $response = $this->get('/admin/genres');
        $response->assertForbidden();
    }
}
