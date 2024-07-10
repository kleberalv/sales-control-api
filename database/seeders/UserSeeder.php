<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            // Diretor Geral
            ['name' => 'Edson A. do Nascimento', 'email' => 'pele@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 1, 'unidade_id' => null],

            // Diretores
            ['name' => 'Vagner Mancini', 'email' => 'vagner.mancini@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 2, 'unidade_id' => 1],
            ['name' => 'Abel Ferreira', 'email' => 'abel.ferreira@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 2, 'unidade_id' => 2],
            ['name' => 'Rogerio Ceni', 'email' => 'rogerio.ceni@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 2, 'unidade_id' => 3],

            // Gerentes
            ['name' => 'Ronaldinho Gaucho', 'email' => 'ronaldinho.gaucho@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 1],
            ['name' => 'Roberto Firmino', 'email' => 'roberto.firmino@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 2],
            ['name' => 'Alex de Souza', 'email' => 'alex.de.souza@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 3],
            ['name' => 'Francisco Souza', 'email' => 'francisco.souza@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 4],
            ['name' => 'Romario Faria', 'email' => 'romario.faria@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 5],
            ['name' => 'Ricardo Goulart', 'email' => 'ricardo.goulart@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 6],
            ['name' => 'Dejan Petkovic', 'email' => 'dejan.petkovic@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 7],
            ['name' => 'Deyverson Acosta', 'email' => 'deyveson.acosta@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 8],
            ['name' => 'Walter Henrique', 'email' => 'walter.henrique@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 3, 'unidade_id' => 9],

            // Vendedores - Belo Horizonte
            ['name' => 'Afonso Afancar', 'email' => 'afonso.afancar@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6],
            ['name' => 'Alceu Andreoli', 'email' => 'alceu.andreoli@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6],
            ['name' => 'Amalia Zago', 'email' => 'amalia.zago@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6],
            ['name' => 'Carlos Eduardo', 'email' => 'carlos.eduardo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6],
            ['name' => 'Luiz Felipe', 'email' => 'luiz.felipe@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6],
            ['name' => 'Breno', 'email' => 'breno@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6],
            ['name' => 'Enzo Gabriel', 'email' => 'enzo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 6],

            // Vendedores - Campo Grande
            ['name' => 'Emanuel', 'email' => 'emanuel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 8],
            ['name' => 'Ryan', 'email' => 'ryan@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 8],

            // Vendedores - Cuiaba
            ['name' => 'Vitor Hugo', 'email' => 'vitor.hugo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10],
            ['name' => 'Yuri', 'email' => 'yuri@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10],
            ['name' => 'Benjamin', 'email' => 'benjamin@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10],
            ['name' => 'Enzo Gabriel', 'email' => 'enzo.gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10],
            ['name' => 'Fernando', 'email' => 'fernando@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 10],

            // Vendedores - Curitiba
            ['name' => 'Joaquim', 'email' => 'joaquim@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3],
            ['name' => 'André', 'email' => 'andre@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3],
            ['name' => 'Raul', 'email' => 'raul@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3],
            ['name' => 'Marcelo', 'email' => 'marcelo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3],
            ['name' => 'Julio Cesar', 'email' => 'julio.cesar@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3],
            ['name' => 'Cauê', 'email' => 'caue@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 3],

            // Vendedores - Florianopolis
            ['name' => 'Benício', 'email' => 'benicio@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2],
            ['name' => 'Vitor Gabriel', 'email' => 'vitor.gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2],
            ['name' => 'Augusto', 'email' => 'augusto@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2],
            ['name' => 'Pedro Lucas', 'email' => 'pedro.lucas@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2],
            ['name' => 'Luiz Gustavo', 'email' => 'luiz.gustavo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 2],

            // Vendedores - Goiania
            ['name' => 'Giovanni', 'email' => 'giovanni@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9],
            ['name' => 'Renato', 'email' => 'renato@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9],
            ['name' => 'Diego', 'email' => 'diego@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9],
            ['name' => 'João Paulo', 'email' => 'joao.paulo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9],
            ['name' => 'Renan', 'email' => 'renan@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 9],

            // Vendedores - Porto Alegre
            ['name' => 'Luiz Fernando', 'email' => 'luiz.fernando@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1],
            ['name' => 'Anthony', 'email' => 'anthony@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1],
            ['name' => 'Lucas Gabriel', 'email' => 'lucas.gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1],
            ['name' => 'Thales', 'email' => 'thales@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 1],

            // Vendedores - Rio de Janeiro
            ['name' => 'Luiz Miguel', 'email' => 'luiz.miguel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5],
            ['name' => 'Henry', 'email' => 'henry@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5],
            ['name' => 'Marcos Vinicius', 'email' => 'marcos.vinicius@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5],
            ['name' => 'Kevin', 'email' => 'kevin@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5],
            ['name' => 'Levi', 'email' => 'levi@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5],
            ['name' => 'Enrico', 'email' => 'enrico@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 5],

            // Vendedores - São Paulo
            ['name' => 'João Lucas', 'email' => 'joao.lucas@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4],
            ['name' => 'Hugo', 'email' => 'hugo@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4],
            ['name' => 'Luiz Henrique', 'email' => 'luiz.henrique@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4],
            ['name' => 'Matheus', 'email' => 'matheus@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4],
            ['name' => 'Miguel', 'email' => 'miguel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 4],

            // Vendedores - Vitória
            ['name' => 'Gabriel', 'email' => 'gabriel@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7],
            ['name' => 'Arthur', 'email' => 'arthur@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7],
            ['name' => 'Lucas', 'email' => 'lucas@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7],
            ['name' => 'Matheus', 'email' => 'matheus.vitoria@magazineazul.com.br', 'password' => Hash::make('123mudar'), 'perfil_id' => 4, 'unidade_id' => 7],
        ]);
    }
}
