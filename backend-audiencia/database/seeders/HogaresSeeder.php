<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HogaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
          ['nombre'=>'Nombre 1','nivel_socioeconomico'=>'nivel 1','proveedor_internet'=>'Proovedor 1','latitud'=>1.1,'longitud'=>2.2,'raspberry_asignada'=>1]  
        ];
        DB::table('hogares')->insert($data);
    }
}
