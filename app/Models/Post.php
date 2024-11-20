<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
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
        'direccion_id',
        'ubicacion_id',
        'piso_id',
        'status'
    ];

    /**
     * Get the direccion that owns the Post.
     */
    public function direccion(): BelongsTo
    {
        return $this->belongsTo(Direccion::class, 'direccion_id');
    }

    /**
     * Get the ubicacion that owns the Post.
     */
    public function ubicacion(): BelongsTo
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id');
    }

    /**
     * Get the piso that owns the Post.
     */
    public function piso(): BelongsTo
    {
        return $this->belongsTo(Piso::class, 'piso_id');
    }

    /**
     * Get the marcaDescripcion that owns the Post.
     */
    public function marcaDescripcion(): BelongsTo
    {
        return $this->belongsTo(MarcaDescripcion::class, 'marca_descripcion');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the post's full address.
     *
     * @return string
     */
    // public function getFullAddressAttribute(): string
    // {
    //     return "{$this->direccion->nombre}, {$this->ubicacion->nombre}, Piso {$this->piso->nombre}";
    // }

    /**
     * Scope a query to only include active posts.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}