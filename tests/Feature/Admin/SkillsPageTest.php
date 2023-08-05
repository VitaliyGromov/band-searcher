<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class SkillsPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;

    public function test_only_admin_can_visit_skills_page(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin);

        $response = $this->get('/admin/skills');

        $response->assertStatus(200);

        $user = $this->user();

        $this->actingAs($user);

        $response = $this->get('/admin/skills');

        $response->assertForbidden();
    }
}
