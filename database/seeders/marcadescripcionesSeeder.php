<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class marcadescripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $array = [
          "Sangoma",
            
        ];
        for ($i = 0; $i < count($array); $i++) {
   

            DB::table('marca_descripciones')->insert([
                'descripcion' =>$array[$i]
            
            ]);
        
    }
}
}
