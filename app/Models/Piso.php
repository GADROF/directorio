<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    use HasFactory;

    protected $table = "pisos";
       protected $fillable = ['numero']; // Ajusta según tus necesidades

    public function posts()
    {
        return $this->hasOne(Post::class);
    }
}