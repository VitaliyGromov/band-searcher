<?php

namespace Tests\Feature\Admin;

use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class SkillsPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;

    public function test_only_admin_can_visit_skills_page(): void
    {
        $this->actingAsAdmin();

        $response = $this->get('/admin/skills');
        $response->assertStatus(200);

        $this->actingAsUser();

        $response = $this->get('/admin/skills');
        $response->assertForbidden();
    }

    public function test_admin_can_create_skill(): void
    {
        $this->actingAsAdmin();

        $skillName = fake()->company();

        $this->post('/admin/skills', ['name' => $skillName]);
        $this->assertDatabaseHas('skills', ['name' => $skillName]);
    }

    public function test_admin_cannot_create_skill_with_ununique_name()
    {
        $this->actingAsAdmin();

        $skill = Skill::factory()->create();

        $amountOfSkills = Skill::count();

        $this->post('/admin/skills', ['name' => $skill->name]);
        $this->assertDatabaseCount('skills', $amountOfSkills);
    }
}
