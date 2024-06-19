<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'Administradores';
    public $timestamps = false;

    protected $fillable = [
        'user',
        'password',
        'idAdmin'
    ];
}
