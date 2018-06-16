<?php

use Illuminate\Database\Seeder;

class ListaDeTarefas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listaDeTarefas')->insert([
        	'texto' => 'comparar passagens aereas',
        	'autor' => 'atanael',
        	'status' => 'concluido',
        	'created_at' => date('Y-m-d h:i:s')
        ]);
        DB::table('listaDeTarefas')->insert([
        	'texto' => 'fazer curso de DB admin',
        	'autor' => 'mendes',
        	'status' => 'pendente',
        	'created_at' => date('Y-m-d h:i:s')
        ]);
        DB::table('listaDeTarefas')->insert([
        	'texto' => 'ficar profissional em laravel',
        	'autor' => 'gamarra',
        	'status' => 'pendente',
        	'created_at' => date('Y-m-d h:i:s')
        ]);
    }
}
