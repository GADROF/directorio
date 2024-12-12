<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use DB;

class direccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $array = [
            "Dirección General del Despacho",
            "Oficina de Auditoría Interna", 
            "Oficina de Planificación y Presupuesto",
            "Consultoría Jurídica",
            "Oficina de Tecnología de la Información y Comunicación",
            "Oficina de Gestión Comunicacional",
            "Oficina de Gestión Administrativa",
            "Oficina de Gestión Humana",
            "Oficina de Atención al Pueblo",
            "Oficina Administrativa de la Secretaria Ejecutiva del Consejo Nacional de Derechos Humanos", 
            "Oficina de Seguridad Integral",
            "Dirección General de Seguimiento y Evaluación de Políticas Públicas",
            "Dirección General de Articulación con Poderes Públicos y Escalas Territoriales de Gobierno",
            "Dirección General de Delegaciones e Instrucciones Presidenciales",


            
        ];
        

for ($i = 0; $i < count($array); $i++) {
   

    DB::table('direcciones')->insert([
        'nombre' =>$array[$i]
    
    ]);



}


    }
}
