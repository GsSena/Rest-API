<?php

use Illuminate\Database\Seeder;

class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tabela = DB::table('usuarios');

        $tabela->insert([
            'login' => 'mSata',
            'nome' => 'Jorge Mateus Nelson Araujo',
            'senha' => 'UE6fch',
            'email' => 'jmateus@hotmail.com'
        ]);
        
        
        $tabela->insert([
            
            'login' => 'MaLibra',
            'nome' => 'Marina Gabrielly Moraes',
            'senha' => 'ETy2qmL',
            'email' => 'mgabrielly@gmail.com'
            ]);
        
            $tabela->insert([    
        
            'login' => 'DuduCosta',
            'nome' => 'Eduado Mateus Costa',
            'senha' => 'sB4ag3',
            'email' => 'dudu@yahoo.com'
        ]);
    }
}
