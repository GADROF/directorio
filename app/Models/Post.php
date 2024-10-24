<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $id
 * @property $direccion_mac
 * @property $serial
 * @property $bienes_id_cliente
 * @property $ext
 * @property $ip
 * @property $puerta_de_enlace
 * @property $marca_descripcion
 * @property $modelo_nombre_host
 * @property $discado_direct
 * @property $direccion
 * @property $ubicacion
 * @property $piso
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
        'direccion',
        'ubicacion',
        'piso'
    ];
}