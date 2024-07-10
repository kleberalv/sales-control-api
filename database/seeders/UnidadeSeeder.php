<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unidades')->insert([
            ['nome' => 'Unidade Porto Alegre', 'lat_lon' => '-30.044750675415955, -51.22858472990906', 'diretoria_id' => 1],
            ['nome' => 'Unidade Florianopolis', 'lat_lon' => '-27.59746355768796, -48.49514815885026', 'diretoria_id' => 1],
            ['nome' => 'Unidade Curitiba', 'lat_lon' => '-25.547439474646576, -49.31808589598274', 'diretoria_id' => 1],
            ['nome' => 'Unidade São Paulo', 'lat_lon' => '-23.53876337316727, -46.83583807899754', 'diretoria_id' => 2],
            ['nome' => 'Unidade Rio de Janeiro', 'lat_lon' => '-22.915895704282574, -43.19774707775456', 'diretoria_id' => 2],
            ['nome' => 'Unidade Belo Horizonte', 'lat_lon' => '-19.937342247154626, -43.93987277450356', 'diretoria_id' => 2],
            ['nome' => 'Unidade Vitória', 'lat_lon' => '-20.31550724990048, -40.31268201579746', 'diretoria_id' => 2],
            ['nome' => 'Unidade Campo Grande', 'lat_lon' => '-20.442044287569365, -54.64769367596645', 'diretoria_id' => 3],
            ['nome' => 'Unidade Goiania', 'lat_lon' => '-16.68691159169015, -49.26434213064935', 'diretoria_id' => 3],
            ['nome' => 'Unidade Cuiaba', 'lat_lon' => '-15.5845302846424, -56.09832706558809', 'diretoria_id' => 3],
        ]);
    }
}
