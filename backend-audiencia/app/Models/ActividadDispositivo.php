<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadDispositivo extends Model
{
    use HasFactory;

    protected $table = 'actividad_dispositivo';
    public $timestamps = false;

    protected $fillable = [
        'id_dispositivo',
        'nombre_pagina',
        'fecha_hora'
    ];

    public function dispositivo()
    {
        return $this->belongsTo(Dispositivo::class, 'id_dispositivo');
    }
}
