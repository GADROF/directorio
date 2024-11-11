<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'direccion_mac',
        'serial',
        'bienes_id_cliente',
        'ext',
        'ip',
        'puerta_de_enlace',
        'marca_descripcion',
        'modelo_nombre_host',
        'discado_direct',
        'direccion_id',
        'ubicacion_id',
        'piso_id',
        'status'
    ];

    // Relación con la tabla direcciones
    public function direcciones()
    {
        return $this->belongsTo(Direcciones::class, 'direccion_id');
    }

    // Relación con la tabla ubicaciones
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id');
    }

    // Relación con la tabla pisos
    public function piso()
    {
        return $this->belongsTo(Piso::class, 'piso_id');
    }

    // Relación con la tabla marca_descripciones
    public function marcaDescripcion()
    {
        return $this->belongsTo(MarcaDescripcion::class, 'marca_descripcion');
    }

    // Método adicional para la relación con direcciones
    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'direccion_id');
    }
}