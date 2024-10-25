<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property int $id
 * @property string $direccion_mac
 * @property string $serial
 * @property string $bienes_id_cliente
 * @property string $ext
 * @property string $ip
 * @property string $puerta_de_enlace
 * @property string|null $marca_descripcion
 * @property string|null $modelo_nombre_host
 * @property string|null $discado_direct
 * @property string|null $direccion
 * @property string|null $ubicacion
 * @property string $piso
 * @property string $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @package App\Models
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
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
        'piso',
        'status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}