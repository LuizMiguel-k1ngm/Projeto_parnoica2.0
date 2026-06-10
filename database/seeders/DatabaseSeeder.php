<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        DB::table('table_clientes')->insert([
            [
                'nome' => 'Roberto Alves Rocha',
                'data_nascimento' => '1989-05-03',
                'cpf' => '16899535129',
                'email' => 'roberto.rocha@exemplo.com',
                'telefone' => '11976543225',
                'estado' => 'SP',
                'cidade' => 'Alvinlândia',
                'status' => 'INATIVO',




            ]


        ]);



        
    }
}
