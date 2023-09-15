<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Mail\User\UserCreatedMail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

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
        $userData['name'] = text('Name of new user', 'name', fake()->name());
        $userData['last_name'] = text('Lastname of new user', 'lastname', fake()->lastName());
        $userData['email'] = text('Email of new user', 'email', fake()->email());
        $userData['phone'] = text('Phone of new user', 'phone', fake()->phoneNumber());
        $userData['password'] = Hash::make(fake()->password());

        $validator = Validator::make($userData, [
            'name' => ['required', 'string', 'max:256'],
            'last_name' => ['required', 'string', 'max:256'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:256'],
            'phone' => ['required', 'string', 'max:30'],
            'password' => ['required', Password::default()],
        ]);

        $validated = $validator->validate();

        if ($validator->failed()) {
            foreach ($validator->errors() as $error) {
                $this->info($error);

                return -1;
            }
        }

        $role = select('Choise the role of new user', Role::all()->pluck('name')->toArray());

        DB::transaction(function () use ($validated, $role) {
            $user = User::create($validated);

            $user->assignRole($role);
        });

        $newUser = User::where('email', $validated['email'])->first();

        Mail::to($newUser->email)->send(new UserCreatedMail($newUser));

        $this->info('User created successfully');

        return 0;
    }
}
