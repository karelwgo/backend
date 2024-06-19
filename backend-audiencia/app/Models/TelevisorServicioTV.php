<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelevisorServicioTV extends Model
{
    use HasFactory;

    protected $table = 'Televisor__servicioTV';
    public $timestamps = false;

    protected $fillable = [
        'id_televisor',
        'id_servicio_tv',
    ];

    public function televisor()
    {
        return $this->belongsTo(Televisor::class, 'id_televisor');
    }

    public function servicioTV()
    {
        return $this->belongsTo(ServicioTV::class, 'id_servicio_tv');
    }
}
