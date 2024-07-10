<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PerfilSeeder::class,
            DiretoriaSeeder::class,
            UnidadeSeeder::class,
            UserSeeder::class,
        ]);
    }
}
