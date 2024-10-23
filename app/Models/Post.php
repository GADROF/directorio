<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $id
 * @property $direccion_mac
 * @property $bienes_id_cliente
 * @property $marca_descripcion
 * @property $modelo_nombre_host
 * @property $ip
 * @property $puerta_de_enlace
 * @property $ext
 * @property $discado_direct
 * @property $direccion
 * @property $ubicacion
 * @property $rango_ext_piso
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
    protected $fillable = ['direccion_mac', 'bienes_id_cliente', 'marca_descripcion', 'modelo_nombre_host', 'ip', 'puerta_de_enlace', 'ext', 'discado_direct', 'direccion', 'ubicacion', 'rango_ext_piso', 'piso'];


}
