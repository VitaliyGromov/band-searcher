<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user command';

    public function handle(): int
    {
        $userData['name'] = $this->ask('Name of ew user', fake()->name());
        $userData['last_name'] = $this->ask('Lastname of new user', fake()->lastName());
        $userData['email'] = $this->ask('Email of new user', fake()->email());
        $userData['phone'] = $this->ask('Phone of new user', fake()->phoneNumber());
        $userData['password'] = Hash::make(fake()->password());

        $validator = Validator::make($userData, [
            'name' => ['required', 'string', 'max:256'],
            'last__name' => ['required', 'string, max:256'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:256'],
            'phone' => ['required', 'string', 'max:11'],
            'password' => ['required', Password::default()],
        ])->validate();

        $role = $this->choice('Choise the role of new user', Role::all()->pluck('name')->toArray());

        DB::transaction(function () use ($validator, $role) {
            $user = User::create($validator);

            $user->assignRole($role);
        });

        $this->info("User created successfully");

        return 0;
    }
}
