<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now();

        DB::table('users')->insert([
            // Diretor Geral
            ['name' => 'Edson A. do Nascimento', 'email' => 'pele@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 1, 'unidade_id' => null, 'created_at' => $now],

            // Diretores
            ['name' => 'Vagner Mancini', 'email' => 'vagner.mancini@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 2, 'unidade_id' => 1, 'created_at' => $now],
            ['name' => 'Abel Ferreira', 'email' => 'abel.ferreira@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 2, 'unidade_id' => 2, 'created_at' => $now],
            ['name' => 'Rogerio Ceni', 'email' => 'rogerio.ceni@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 2, 'unidade_id' => 3, 'created_at' => $now],

            // Gerentes
            ['name' => 'Ronaldinho Gaucho', 'email' => 'ronaldinho.gaucho@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 1, 'created_at' => $now],
            ['name' => 'Roberto Firmino', 'email' => 'roberto.firmino@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 2, 'created_at' => $now],
            ['name' => 'Alex de Souza', 'email' => 'alex.de.souza@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 3, 'created_at' => $now],
            ['name' => 'Francisco Souza', 'email' => 'francisco.souza@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 4, 'created_at' => $now],
            ['name' => 'Romario Faria', 'email' => 'romario.faria@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 5, 'created_at' => $now],
            ['name' => 'Ricardo Goulart', 'email' => 'ricardo.goulart@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 6, 'created_at' => $now],
            ['name' => 'Dejan Petkovic', 'email' => 'dejan.petkovic@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 7, 'created_at' => $now],
            ['name' => 'Deyverson Acosta', 'email' => 'deyveson.acosta@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 8, 'created_at' => $now],
            ['name' => 'Walter Henrique', 'email' => 'walter.henrique@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 9, 'created_at' => $now],

            // Vendedores - Belo Horizonte
            ['name' => 'Afonso Afancar', 'email' => 'afonso.afancar@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6, 'created_at' => $now],
            ['name' => 'Alceu Andreoli', 'email' => 'alceu.andreoli@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6, 'created_at' => $now],
            ['name' => 'Amalia Zago', 'email' => 'amalia.zago@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6, 'created_at' => $now],
            ['name' => 'Carlos Eduardo', 'email' => 'carlos.eduardo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6, 'created_at' => $now],
            ['name' => 'Luiz Felipe', 'email' => 'luiz.felipe@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6, 'created_at' => $now],
            ['name' => 'Breno', 'email' => 'breno@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6, 'created_at' => $now],
            ['name' => 'Enzo Gabriel', 'email' => 'enzo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6, 'created_at' => $now],

            // Vendedores - Campo Grande
            ['name' => 'Emanuel', 'email' => 'emanuel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 8, 'created_at' => $now],
            ['name' => 'Ryan', 'email' => 'ryan@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 8, 'created_at' => $now],

            // Vendedores - Cuiaba
            ['name' => 'Vitor Hugo', 'email' => 'vitor.hugo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10, 'created_at' => $now],
            ['name' => 'Yuri', 'email' => 'yuri@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10, 'created_at' => $now],
            ['name' => 'Benjamin', 'email' => 'benjamin@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10, 'created_at' => $now],
            ['name' => 'Enzo Gabriel', 'email' => 'enzo.gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10, 'created_at' => $now],
            ['name' => 'Fernando', 'email' => 'fernando@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10, 'created_at' => $now],

            // Vendedores - Curitiba
            ['name' => 'Joaquim', 'email' => 'joaquim@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3, 'created_at' => $now],
            ['name' => 'André', 'email' => 'andre@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3, 'created_at' => $now],
            ['name' => 'Raul', 'email' => 'raul@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3, 'created_at' => $now],
            ['name' => 'Marcelo', 'email' => 'marcelo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3, 'created_at' => $now],
            ['name' => 'Julio Cesar', 'email' => 'julio.cesar@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3, 'created_at' => $now],
            ['name' => 'Cauê', 'email' => 'caue@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3, 'created_at' => $now],

            // Vendedores - Florianopolis
            ['name' => 'Benício', 'email' => 'benicio@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2, 'created_at' => $now],
            ['name' => 'Vitor Gabriel', 'email' => 'vitor.gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2, 'created_at' => $now],
            ['name' => 'Augusto', 'email' => 'augusto@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2, 'created_at' => $now],
            ['name' => 'Pedro Lucas', 'email' => 'pedro.lucas@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2, 'created_at' => $now],
            ['name' => 'Luiz Gustavo', 'email' => 'luiz.gustavo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2, 'created_at' => $now],

            // Vendedores - Goiania
            ['name' => 'Giovanni', 'email' => 'giovanni@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9, 'created_at' => $now],
            ['name' => 'Renato', 'email' => 'renato@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9, 'created_at' => $now],
            ['name' => 'Diego', 'email' => 'diego@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9, 'created_at' => $now],
            ['name' => 'João Paulo', 'email' => 'joao.paulo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9, 'created_at' => $now],
            ['name' => 'Renan', 'email' => 'renan@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9, 'created_at' => $now],

            // Vendedores - Porto Alegre
            ['name' => 'Luiz Fernando', 'email' => 'luiz.fernando@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1, 'created_at' => $now],
            ['name' => 'Anthony', 'email' => 'anthony@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1, 'created_at' => $now],
            ['name' => 'Lucas Gabriel', 'email' => 'lucas.gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1, 'created_at' => $now],
            ['name' => 'Thales', 'email' => 'thales@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1, 'created_at' => $now],

            // Vendedores - Rio de Janeiro
            ['name' => 'Luiz Miguel', 'email' => 'luiz.miguel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5, 'created_at' => $now],
            ['name' => 'Henry', 'email' => 'henry@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5, 'created_at' => $now],
            ['name' => 'Marcos Vinicius', 'email' => 'marcos.vinicius@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5, 'created_at' => $now],
            ['name' => 'Kevin', 'email' => 'kevin@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5, 'created_at' => $now],
            ['name' => 'Levi', 'email' => 'levi@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5, 'created_at' => $now],
            ['name' => 'Enrico', 'email' => 'enrico@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5, 'created_at' => $now],

            // Vendedores - São Paulo
            ['name' => 'João Lucas', 'email' => 'joao.lucas@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4, 'created_at' => $now],
            ['name' => 'Hugo', 'email' => 'hugo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4, 'created_at' => $now],
            ['name' => 'Luiz Henrique', 'email' => 'luiz.henrique@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4, 'created_at' => $now],
            ['name' => 'Matheus', 'email' => 'matheus@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4, 'created_at' => $now],
            ['name' => 'Miguel', 'email' => 'miguel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4, 'created_at' => $now],

            // Vendedores - Vitória
            ['name' => 'Gabriel', 'email' => 'gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7, 'created_at' => $now],
            ['name' => 'Arthur', 'email' => 'arthur@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7, 'created_at' => $now],
            ['name' => 'Lucas', 'email' => 'lucas@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7, 'created_at' => $now],
            ['name' => 'Matheus', 'email' => 'matheus.vitoria@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7, 'created_at' => $now],
        ]);
    }
}
