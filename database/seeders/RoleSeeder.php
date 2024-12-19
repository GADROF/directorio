<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'Administrador'],
            ['name' => 'Usuario'],
    
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}