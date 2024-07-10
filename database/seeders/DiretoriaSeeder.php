<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretorias')->insert([
            ['nome' => 'Diretoria Sul'],
            ['nome' => 'Diretoria Sudeste'],
            ['nome' => 'Diretoria Centro-oeste'],
        ]);
    }
}
