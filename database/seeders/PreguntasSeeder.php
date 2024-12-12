<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PreguntasSeeder extends Seeder
{
    public function run(): void
    {
      
        $array = [
           '¿Cuál es el nombre de tu primera mascota?',   
           '¿En que ciudad naciste?',   
           '¿Cuál fue el nombre de tu primera escuela?'
        ];
        

        for ($i = 0; $i < count($array); $i++){
           
         DB::table('preguntas')->insert([
            'pregunta' =>$array[$i]
           
           
        ]);
    }
    }
}