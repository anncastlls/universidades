<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversidadCarrera extends Model
{
    protected $table = 'universidad_carrera';

    protected $fillable = [
        'universidad_id',
        'carrera_id',
    ];

    // Relación con Universidad
    public function universidad()
    {
        return $this->belongsTo(Universidad::class);
    }

    // Relación con Carrera
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}