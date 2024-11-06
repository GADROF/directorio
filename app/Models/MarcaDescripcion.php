<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaDescripcion extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion']; // Ajusta según tus necesidades

    public function posts()
    {
        return $this->hasOne(Post::class, 'marca_descripcion');
    }
}