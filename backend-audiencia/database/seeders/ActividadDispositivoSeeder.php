<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadDispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividades = [
            ['id' => 148326, 'id_dispositivo' => 1, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 03:22:14', 'id_raspberry' => 150],
            ['id' => 148327, 'id_dispositivo' => 1, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 03:22:14', 'id_raspberry' => 150],
            ['id' => 148328, 'id_dispositivo' => 1, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 03:22:14', 'id_raspberry' => 150],
            ['id' => 148329, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:26:58', 'id_raspberry' => 150],
            ['id' => 148330, 'id_dispositivo' => 1, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 03:22:14', 'id_raspberry' => 150],
            ['id' => 148331, 'id_dispositivo' => 1, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 03:22:14', 'id_raspberry' => 150],
            ['id' => 148332, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:26:58', 'id_raspberry' => 150],
            ['id' => 148333, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:26:58', 'id_raspberry' => 150],
            ['id' => 148334, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:42:35', 'id_raspberry' => 150],
            ['id' => 148335, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:42:35', 'id_raspberry' => 150],
            ['id' => 148336, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:42:35', 'id_raspberry' => 150],
            ['id' => 148337, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:53:49', 'id_raspberry' => 150],
            ['id' => 148338, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:53:49', 'id_raspberry' => 150],
            ['id' => 148339, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 03:53:49', 'id_raspberry' => 150],
            ['id' => 148340, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 04:06:08', 'id_raspberry' => 150],
            ['id' => 148341, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 04:06:08', 'id_raspberry' => 150],
            ['id' => 148342, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 04:06:08', 'id_raspberry' => 150],
            ['id' => 148343, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 04:18:56', 'id_raspberry' => 150],
            ['id' => 148344, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 04:18:56', 'id_raspberry' => 150],
            ['id' => 148345, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:18:18', 'id_raspberry' => 150],
            ['id' => 148346, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:18:18', 'id_raspberry' => 150],
            ['id' => 148347, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:18:18', 'id_raspberry' => 150],
            ['id' => 148348, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:31:18', 'id_raspberry' => 150],
            ['id' => 148349, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:31:18', 'id_raspberry' => 150],
            ['id' => 148350, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:18:18', 'id_raspberry' => 150],
            ['id' => 148351, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:18:18', 'id_raspberry' => 150],
            ['id' => 148352, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:31:18', 'id_raspberry' => 150],
            ['id' => 148353, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:31:18', 'id_raspberry' => 150],
            ['id' => 148354, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:31:18', 'id_raspberry' => 150],
            ['id' => 148355, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:45:03', 'id_raspberry' => 150],
            ['id' => 148356, 'id_dispositivo' => 2, 'nombre_pagina' => 'Spotify', 'fecha_hora' => '2023-12-04 07:45:03', 'id_raspberry' => 150],
            ['id' => 148357, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:11:13', 'id_raspberry' => 150],
            ['id' => 148358, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:10', 'id_raspberry' => 150],
            ['id' => 148359, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:13', 'id_raspberry' => 150],
            ['id' => 148360, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:13', 'id_raspberry' => 150],
            ['id' => 148361, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:47', 'id_raspberry' => 150],
            ['id' => 148362, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148363, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148364, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148365, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148366, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:14:21', 'id_raspberry' => 150],
            ['id' => 148367, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:11:13', 'id_raspberry' => 150],
            ['id' => 148368, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:10', 'id_raspberry' => 150],
            ['id' => 148369, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:13', 'id_raspberry' => 150],
            ['id' => 148370, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:13', 'id_raspberry' => 150],
            ['id' => 148371, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:47', 'id_raspberry' => 150],
            ['id' => 148372, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148373, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148374, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148375, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:49', 'id_raspberry' => 150],
            ['id' => 148376, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:14:21', 'id_raspberry' => 150],
            ['id' => 148377, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:16:13', 'id_raspberry' => 150],
            ['id' => 148378, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:11:13', 'id_raspberry' => 150],
            ['id' => 148379, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:10', 'id_raspberry' => 150],
            ['id' => 148380, 'id_dispositivo' => 4, 'nombre_pagina' => 'Facebook', 'fecha_hora' => '2023-12-04 10:13:13', 'id_raspberry' => 150],
        ];

        DB::table('actividad_dispositivo')->insert($actividades);
    }
}