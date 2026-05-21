<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Universidad;

class Carrera extends Model
{
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'perfil_ingreso',
        'perfil_egreso',
        'contacto',
    ];

    public function universidades()
    {
        return $this->belongsToMany(
            Universidad::class,
            'universidad_carrera',
            'carrera_id',
            'universidad_id'
        );
    }
}