<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanalTV extends Model
{
    use HasFactory;

    protected $table = 'canalTV';
    public $timestamps = false;

    protected $fillable = [
        'nombre_canal',
        'numero_canal',
    ];
}
