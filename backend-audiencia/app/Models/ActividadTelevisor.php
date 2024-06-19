<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadTelevisor extends Model
{
    use HasFactory;

    protected $table = 'Actividad_televisor';
    public $timestamps = false;

    protected $fillable = [
        'id_televisor',
        'id_servicio',
        'nomnbre_canal_visto',
        'numero_canal_visto',
        'fecha_hora_inicio',
        'fecha_hora_fin'
    ];

    public function televisor()
    {
        return $this->belongsTo(Televisor::class, 'id_televisor');
    }

    public function servicioTV()
    {
        return $this->belongsTo(ServicioTV::class, 'id_servicio');
    }
}
