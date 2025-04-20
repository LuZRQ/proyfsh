<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desafio extends Model
{
    protected $fillable = ['user_id', 'puntos', 'estrellas', 'dias_completados', 'completado'];

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
