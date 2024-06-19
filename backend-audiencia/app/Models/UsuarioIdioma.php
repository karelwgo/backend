<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioIdioma extends Model
{
    use HasFactory;

    protected $table = 'usuario_idioma';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'id_idioma',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'id_idioma');
    }
}
