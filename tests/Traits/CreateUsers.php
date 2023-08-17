<?php

declare(strict_types=1);

namespace Tests\Traits;

use App\Models\User;

trait CreateUsers
{
    public function admin(): User
    {
        $admin = User::factory()->create();

        $admin->assignRole('admin');

        return $admin;
    }

    public function user(): User
    {
        $user = User::factory()->create();

        $user->assignRole('user');

        return $user;
    }

    public function actingAsAdmin()
    {
        $admin = $this->admin();

        return parent::actingAs($admin);
    }

    public function actingAsUser()
    {
        $user = $this->user();

        return parent::actingAs($user);
    }
}
