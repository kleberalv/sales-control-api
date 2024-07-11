<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('perfis')->insert([
            ['nome' => 'Diretor Geral', 'created_at' => $now,],
            ['nome' => 'Diretor', 'created_at' => $now,],
            ['nome' => 'Gerente', 'created_at' => $now,],
            ['nome' => 'Vendedor', 'created_at' => $now,],
        ]);
    }
}
