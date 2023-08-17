<?php

declare(strict_types=1);

namespace Tests\Feature\Admin;

use App\Enums\Status;
use App\Models\Ad;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class AdsPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;

    public function test_only_admin_can_visit_ads_page(): void
    {
        $this->actingAsAdmin();

        $response = $this->get('/admin/ads');
        $response->assertStatus(200);

        $this->actingAsUser();

        $response = $this->get('/admin/ads');
        $response->assertForbidden();
    }

    public function test_admin_can_visit_single_ad_page(): void
    {
        $this->actingAsAdmin();

        $ad = Ad::factory()->create();

        $response = $this->get("admin/ads/$ad->id");
        $response->assertOk();
    }

    public function test_admin_can_delete_ad(): void
    {
        $this->actingAsAdmin();

        $ad = Ad::factory()->create();

        $this->delete("ads/$ad->id");
        $this->assertDatabaseEmpty('ads');
    }

    public function test_admin_can_change_ad_status()
    {
        $this->actingAsAdmin();

        $ad = Ad::factory()->create();

        $status = array_rand(Status::getAllStatusesAsArray());

        $this->put("admin/ads/$ad->id", ['status' => $status]);
        $this->assertDatabaseHas('ads', ['status' => $status]);
    }
}
