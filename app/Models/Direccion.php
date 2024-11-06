<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $fillable = ['nombre']; // Ajusta según tus necesidades

    public function posts()
    {
        return $this->hasOne(Post::class);
    }
}