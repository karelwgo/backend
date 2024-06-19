<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = false;

    protected $fillable = [
        'id_hogar',
        'Nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'genero',
        'fechaNacimiento',
        'correoElectronico',
        'nivelEduacion',
        'estadoCivil',
        'ocupacion',
        'numeroControl'
    ];
    
    public function hogar()
    {
        return $this->belongsTo(Hogares::class, 'id_hogar');
    }
}
