<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadUsuario extends Model
{
    use HasFactory;

    protected $table = 'Actividad_usuario';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'id_televisor',
        'fecha_hora_inicio',
        'fecha_hora_fin',
        'id_raspberry'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function televisor()
    {
        return $this->belongsTo(Televisor::class, 'id_televisor');
    }
}
