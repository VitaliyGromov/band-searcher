<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_login_page_returns_successful_respounse(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_user_cannot_register_with_ununique_email(): void
    {
        $user = User::factory()->create();

        $this->post('/register', [
            'name' => $user->name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'phone' => $user->phone,
            'paswword' => $user->password,
            'password_confirmation' => $user->password,
        ]);

        $this->assertGuest();
    }
}
