<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class AdsPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;
    
    public function test_only_admin_can_visit_ads_page(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin);

        $response = $this->get('/admin/ads');

        $response->assertStatus(200);

        $user = $this->user();

        $this->actingAs($user);

        $response = $this->get('/admin/ads');

        $response->assertForbidden();
    }
}
