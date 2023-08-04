<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_login_page_returns_successful_respounse(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_cannot_login_with_wrong_password(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'some-wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_user_cannot_login_with_wrong_email(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => 'wrong@email.com',
            'password' => $user->password,
        ]);

        $this->assertGuest();
    }
}
