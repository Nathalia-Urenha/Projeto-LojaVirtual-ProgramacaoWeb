<?php

use Illuminate\Database\Seeder;
use App\models\Cliente;

class ClienteSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Cliente $registro)
    {
        $registro->create([
            'nome' => 'Nathalia Maria Urenha Machado',
            'email' => 'naty.urenha@gmail.com',
            'senha' => '12345',
            'telefone' => '14981954220',
            'cpf' => '47630238886',
        ]);

        $registro->create([
            'nome' => 'Igor Solfa Romero',
            'email' => 'igorsromero@gmail.com',
            'senha' => '14789',
            'telefone' => '14981363550',
            'cpf' => '3012565489',
        ]);

        $registro->create([
            'nome' => 'Gyovanna Machado',
            'email' => 'gyovanna@gmail.com',
            'senha' => '96321',
            'telefone' => '179856321',
            'cpf' => '23569874125',
        ]);
    }
}
