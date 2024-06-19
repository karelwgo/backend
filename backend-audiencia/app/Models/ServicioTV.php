<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioTV extends Model
{
    use HasFactory;

    protected $table = 'servicioTV';
    public $timestamps = false;

    protected $fillable = [
        'nombre_servicio'
    ];
}
