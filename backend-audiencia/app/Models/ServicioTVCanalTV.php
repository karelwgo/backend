<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioTVCanalTV extends Model
{
    use HasFactory;

     protected $table = 'servicioTV_canalTV';
     public $timestamps = false;

    
     protected $fillable = [
         'id_servicio',
         'id_canal',
     ];
 
 
     public function servicioTV()
     {
         return $this->belongsTo(ServicioTV::class, 'id_servicio');
     }
 
     public function canalTV()
     {
         return $this->belongsTo(CanalTV::class, 'id_canal');
     }
}
