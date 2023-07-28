<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user command';

    public function handle()
    {
        $email = fake()->email();
        $phone = fake()->phoneNumber();
        $password = fake()->password();

        $user = User::create([
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => $email,
            'phone' => $phone,
            'password' => Hash::make($password),
        ]);

        $role = $this->argument('role');

        $user->assignRole($role);

        $this->info("Created new $role with email $email, password $password");
    }
}
