<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'bienes_id_cliente',
        'direccion',
        'direccion_mac',
        'piso',
        'ext',
        'marca_descripcion',
        'modelo_nombre_host',
        'puerto_enlace',
        'ip',
        'discado_directo',
        'ubicacion',
        'rango_ext_piso',
    ];
}