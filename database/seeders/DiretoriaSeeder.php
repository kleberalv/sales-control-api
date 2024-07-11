<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('diretorias')->insert([
            ['nome' => 'Diretoria Sul', 'created_at' => $now],
            ['nome' => 'Diretoria Sudeste', 'created_at' => $now],
            ['nome' => 'Diretoria Centro-oeste', 'created_at' => $now],
        ]);
    }
}
