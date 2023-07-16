<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    public array $roles = [
        'admin', 'user',
    ];

    public function up(): void
    {
        foreach($this->roles as $role){
            Role::create(['name' => $role]);
        }
    }

    public function down(): void
    {
        foreach($this->roles as $role){
            $role = Role::findByName($role);
            $role->delete();
        }
    }
};
