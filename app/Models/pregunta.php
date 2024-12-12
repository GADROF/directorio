<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    use HasFactory;

    // Especificar la tabla si no sigue la convención de nombres
    protected $table = 'preguntas';
        protected $fillable = ['pregunta'];

        public function users()
        {
            return $this->hasOne(User::class);
        }
    
}
