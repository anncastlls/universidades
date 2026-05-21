<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Universidad extends Model
{
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'web',
        'telefono',
        'contacto',
        'youtube',
        'facebook',
        'instagram',
    ];

    // una universidad puede impartir muchas carreras
    public function carreras()
    {
        return $this->belongsToMany(
            Carrera::class,
            'universidad_carrera',
            'universidad_id',
            'carrera_id'
        );
    }
}