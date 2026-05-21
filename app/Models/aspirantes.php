<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aspirantes extends Model
{
     protected $fillable=[
        'nombre completo',
        'correo',
        'pregunta',
        'respuesta',
        'telefono',
     ];
}
