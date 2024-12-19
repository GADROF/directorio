<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(direccionesSeeder::class);
        $this->call(marcadescripcionesSeeder::class);
        $this->call(pisosSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(ubicacionesSeeder::class);
        $this->call(RoleSeeder::class);
    }
 
}
