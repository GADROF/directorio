<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class pisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $array = [
          "Estacionamiento",
          "Planta Baja",
          "Piso 1",
          "Piso 2",
          "Piso 3",
          "Anexo",
        ];
        
        for ($i = 0; $i < count($array); $i++) {
   

            DB::table('pisos')->insert([
                'nombre' =>$array[$i]
            
            ]);
        
       
    }
}
}

