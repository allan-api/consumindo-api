<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = new User;
        $usuarios->nome         = 'allan';
        $usuarios->sobrenome    = 'teixeira martins';
        $usuarios->email        = 'allan@hotmail.com';
        $usuarios->nascimento   = '1998-06-16';
        $usuarios->telefone     = '11965814798';
        $usuarios->celular      = '1159252951';
        $usuarios->cep          = '04821010';
        $usuarios->logradouro   = 'av. presidente joao goulart';
        $usuarios->cidade       = 'São Paulo';
        $usuarios->bairro       = 'Jd. Mallia 2';
        $usuarios->numero       = 1747;
        $usuarios->uf           = 'sp';
        $usuarios->save();
        
        $usuarios = new User;
        $usuarios->nome         = 'rodrigo';
        $usuarios->sobrenome    = 'souza rodrigues';
        $usuarios->email        = 'rodrigo@hotmail.com';
        $usuarios->nascimento   = '1998-06-16';
        $usuarios->celular      = '11965314238';
        $usuarios->cep          =  '04821010';
        $usuarios->logradouro   =  'av. joao dutra';
        $usuarios->cidade       =  'Rio de Janeiro';
        $usuarios->bairro       =  'Copacabana';
        $usuarios->numero       =  12;
        $usuarios->uf           =  'rj';
        $usuarios->save();
        
        $usuarios = new User;
        $usuarios->nome         = 'richard';
        $usuarios->sobrenome    = 'santos';
        $usuarios->email        = 'richard@hotmail.com';
        $usuarios->nascimento   = '1998-06-16';
        $usuarios->telefone1    = '(11) 96581-4798';
        $usuarios->cep          =  '04821010';
        $usuarios->logradouro   =  'av. paulista';
        $usuarios->cidade       =  'São Paulo';
        $usuarios->bairro       =  'Paulista';
        $usuarios->numero       =  1747;
        $usuarios->uf           =  'sp';
        $usuarios->save();
    }
}
