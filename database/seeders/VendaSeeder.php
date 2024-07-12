<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Venda;
use Carbon\Carbon;

class VendaSeeder extends Seeder
{
    public function run()
    {

        $vendedores = User::whereHas('perfil', function($query) {
            $query->where('nome', 'Vendedor');
        })->get();

        foreach ($vendedores as $vendedor) {
            for ($i = 1; $i <= 3; $i++) {
                Venda::create([
                    'user_id' => $vendedor->id,
                    'data' => Carbon::now()->subDays($i)->toDateString(),
                    'hora' => Carbon::now()->subHours($i)->toTimeString(),
                    'valor' => rand(100, 1000),
                    'lat_lon' => '-23.550520, -46.633308'
                ]);
            }
        }
    }
}
