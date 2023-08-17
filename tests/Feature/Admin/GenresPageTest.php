<?php

namespace Tests\Feature\Admin;

use App\Models\Genre;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreateUsers;

class GenresPageTest extends TestCase
{
    use RefreshDatabase, CreateUsers;

    public function test_only_admin_can_visit_genres_page(): void
    {
        $this->actingAsAdmin();

        $response = $this->get('/admin/genres');
        $response->assertStatus(200);

        $this->actingAsUser();

        $response = $this->get('/admin/genres');
        $response->assertForbidden();
    }

    public function test_admin_can_create_genre(): void
    {
        $this->actingAsAdmin();

        $genreName = fake()->company();

        $this->post('/admin/genres', ['name' => $genreName]);
        $this->assertDatabaseHas('genres', ['name' => $genreName]);
    }

    public function test_genre_with_ununique_name_cannot_be_created(): void
    {
        $this->actingAsAdmin();

        $genre = Genre::factory()->create();

        $amountOfGenres = Genre::count();

        $this->post('/admin/genres', ['name' => $genre->name]);
        $this->assertDatabaseCount('genres', $amountOfGenres);
    }

    public function test_admin_can_edit_genre_name(): void
    {
        $this->actingAsAdmin();

        $genre = Genre::factory()->create();

        $newGenreName = fake()->company();

        $this->put("/admin/genres/$genre->id", ['name' => $newGenreName]);
        $this->assertDatabaseHas('genres', ['name' => $newGenreName]);
    }

    public function test_admin_can_delete_genre(): void
    {
        $this->actingAsAdmin();

        $genre = Genre::factory()->create();

        $this->delete("/admin/genres/$genre->id");
        $this->assertDatabaseMissing('genres', ['name' => $genre->name]);
    }
}