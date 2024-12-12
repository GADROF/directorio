<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use DB;
class ubicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $array = [
            "Coordinación de Correspondencia",
            "Coordinación de Archivo",
            "Dir. Gral. de Lín. de Control Posterior",
            "Dir. Gral. de Lín. de Determinación de Responsabilidades",
            "Dirección de Línea de Planificación",
            "Dirección de Línea de Desarrollo Organizacional",
            "Dirección de Línea de Presupuesto",
            "Dirección de Línea de Análisis Normativo y Dictámenes",
            "Dirección de Línea de Asuntos Administrativos de Apoyo Institucional",
            "Dir. de Lín. de Desarrollo de Sistemas",
            "Dir. de Lín. de Soporte Técnico",
            "Dir. de Lín. de Telecomunicaciones",
            "Dir. de Lín. de Centro de Datos",
            "Dirección de Línea de Prensa",
            "Dirección de Línea de Audiovisual",
            "Dirección de Línea de Comunicaciones Digitales",
            "Dirección de Línea de Protocolo y Eventos",
            "Dirección de Línea de Finanzas",
            "Coordinación de Tesorería",
            "Coordinación de Contabilidad",
            "Coordinación de Ordenes de Pago",
            "Dirección de Línea de Servicios Generales",
            "Coordinación de Mantenimiento",
            "Coordinación de Transporte",
            "Coordinación de Servicios Básicos",
            "Dirección de Línea de Bienes Nacionales",
            "Coordinación de Compras",
            "Coordinación de Almacén",
            "Coordinación de Bienes",
            "Dirección de Línea de Bienestar Social",
            "Coordinación del Centro de Educación Inicial",
            "Coordinación de Servicio Médico",
            "Dirección de Línea de Apoyo Técnico",
            "Dirección de Línea de Apoyo Administrativo",
            "Coordinación de Nomina",
            "Dirección de Línea de Atención Social",
            "Dirección de Linea de Denuncias",
            "Dirección de Línea de Participación Ciudadana",
            "Dirección de Línea de Diseño y Seguimiento de Políticas Públicas,  en Materia de Derechos Humanos", 
            "Dirección de Línea Seguimientos y Denuncias de Casos",
            "Dirección de Línea de Cooperación Internacional en Materia de Derechos Humanos",
            "Dirección de Línea de Promoción y Educación en Derechos Humanos",
            "Dirección de Línea de Seguridad y Protección",
            "Coordinación de Enlace Aéreo",
            "Coordinación de Parque Automotor",
            "Coordinación de Parque de Armas",
            "Dirección de Línea de Seguridad e Higiene Industrial",
            "Coordinación de Seguridad de Instalaciones",
            "Coordinación de Higiene Industrial",
            "Coordinación de Prevención y Respuesta Inmediata",
            "Dirección de Línea de Monitoreo y Análisis del Entorno",
            "Coordinación de Información ",
            "Dirección de Línea de Seguimiento y Control de la Gestión Territorial",  
            "Coordinación de Control de la Gestión del Gabinete Ejecutivo y Otros Poderes",
            "Coordinación de Control de la Gestión Territorial",
            "Coordinación de Información ",
            "Dirección de Línea de Evaluación Estratégica",
            "Coordinación de Control de la Gestión Territorial",
            "Coordinación de Jubilaciones Especiales",
            "Dir. de Línea. de Articulación con el Poder Popular",
            "Dirección de Línea de Articulación con Escalas Territoriales de Gobierno y entes Gubernamentales",
            "Dirección de Línea de Articulación con los Poderes Públicos",
            "Dir. de Lín. de Asuntos Adtvos de Apoyo Institucional",
            "Dir. de Lín. de Evaluación Est, de la sala Situacional",
            "Coordinación de Jubilaciones Especiales",
            "Dirección de Línea de Gestión Comunicacional",
            "Dirección de Línea de Instituciones Presidenciales",
            "Dirección de Línea de Organización Sis. Admins.",
            "Dirección de Línea de Participación",
            "Dir. Gral. de Lín. de Inspección",
            "Dir. Gral. de Lín. de Seg. Y Cont. a Político Estratégica",
            "Dir. Gral. de Lín. de Seg. y Evaluación de Gestión Publica",
            "Dirección de Línea de  Planificación",
            "Dir. Gral. de Lín. de Apoyo Logístico y asist. Tecnológica",
            "Dirección de Línea de Estrategia Comunicacional",

            
        ];
        for ($i = 0; $i < count($array); $i++) {
   

            DB::table('ubicaciones')->insert([
                'nombre' =>$array[$i]
            
            ]);


    }
}

}