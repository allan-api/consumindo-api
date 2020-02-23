<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    protected $fillable = [
        'nome', 'sobrenome', 'email', 'nascimento', 'celular', 'telefone', 'cep', 'logradouro', 'cidade', 'bairro', 'numero', 'uf'
    ];

    public function indexModel()
    {
        return self::orderby('id', 'desc')->paginate();
    }


    public function storeModel($request)
    {
            $usuario = new User;
            $usuario->fill($request->all());
            $usuario->save();
        return $usuario;
    }

    public function showModel($id)
    {
            $resp = self::FindOrFail($id);
            $data = [
                'data' => $resp
            ];
            return $data;
    }
    
    
    //falta fazer o restante daqui para baixo
    public function updateModel($request, $id)
    {
        $return = self::FindOrFail($id);
        $return->update($request->all());
        return 'sucess';
    }


    public function destroyModel($id)
    {
        $return = self::FindOrFail($id);
        $return->delete();
        return 'sucess';
    }

    
}
