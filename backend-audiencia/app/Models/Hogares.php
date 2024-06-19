<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hogares extends Model
{
    use HasFactory;
     protected $table = 'Hogares';
     public $timestamps = false;


     protected $fillable = [
         'nombre',
         'nivel_socioeconomico',
         'proveedor_internet',
         'latitud',
         'longitud',
         'raspberry_asignada'
     ];
 
     public function televisores()
     {
         return $this->hasMany(Televisor::class, 'id_hogar');
     }
}