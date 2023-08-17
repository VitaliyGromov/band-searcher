<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::transaction(function () {
            $admin = User::create([
                'name' => 'Виталий',
                'last_name' => 'Громов',
                'email' => env('DEFAULT_ADMIN_EMAIL'),
                'email_verified_at' => now(),
                'phone' => '89373743794',
                'password' => Hash::make(env('DEFAULT_ADMIN_PASSWORD')),
            ]);

            $admin->assignRole('admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $admin = User::where('email', 'gromov.vitaliy03@gmail.com')->get();

        $admin->delete();
    }
};
