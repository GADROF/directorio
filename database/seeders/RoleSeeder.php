<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'Administrador', 'description' => 'Rol de administrador del sistema'],
            ['name' => 'Usuario', 'description' => 'Rol de usuario estándar'],
    
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}