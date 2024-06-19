<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $table = 'Dispositivo';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'nombreDispositivo',
        'direccionIP',
        'tipoDispositivo',
        'marca',
        'modelo',
        'sistemaOperativo'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
