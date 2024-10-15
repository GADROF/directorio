<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;

    protected $table = 'directorio';

    protected $fillable = [
        'id_cliente',
        'direccion',
        'direccion_mac',
        'piso',
        'ext',
        'marca',
        'descripcion',
        'modelo',
        'nombre_host',
        'puerto_enlace',
        'ip',
        'discado_directo',
        'ubicacion',
        'rango_ext',
        'piso_ext',
    ];

    public function cliente()
    {
         return $this->belongsTo(Cliente::class, 'id_cliente');
    }






    // Si necesitas definir relaciones, puedes hacerlo aquí
    // Por ejemplo:
    // public function cliente()
    // {
    //     return $this->belongsTo(Cliente::class, 'id_cliente');
    // }
}