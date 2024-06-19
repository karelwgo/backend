<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Televisor extends Model
{
    use HasFactory;

    protected $table = 'Televisor';
    public $timestamps = false;

    protected $fillable = [
        'id_hogar',
        'tamano',
        'marca',
        'resolucion',
        'esp32MAC',
        'estado'
    ];

    public function hogar()
    {
        return $this->belongsTo(Hogares::class, 'id_hogar');
    }
};