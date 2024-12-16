<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    use HasFactory;

    // Especificar la tabla si no sigue la convención de nombres
    protected $table = 'preguntas';
    
    // Campos que se pueden llenar masivamente
    protected $fillable = ['pregunta'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
