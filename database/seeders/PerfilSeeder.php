<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfis')->insert([
            ['nome' => 'Diretor Geral'],
            ['nome' => 'Diretor'],
            ['nome' => 'Gerente'],
            ['nome' => 'Vendedor'],
        ]);
    }
}
