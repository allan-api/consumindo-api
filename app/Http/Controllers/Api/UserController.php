<?php

namespace App\Http\Controllers\api;

use App\Api\ApiMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;


class UserController extends Controller
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        try {
            $user = new User;
            $data = $user->indexModel();
            return $data;
            
        } catch (\Exception $e) {
            if (config('app.debug')) { //verifica se o debug está ativo
                return response()->json(ApiMessage::message($e->getMessage(), ''));
            } else {
                return response()->json(ApiMessage::message('Houve um erro ao realizar a operação', 500));
            }
        }
    }


    public function store(Request $request)
    {
        try {
            $user = new User;
            $user->storeModel($request);
            $return = ApiMessage::message('Usuário criado com sucesso', 201);
            return response()->json($return, 201);
        } catch (\Exception $e) {
            if (config('app.debug')) { //verifica se o debug está ativo
                return response()->json(ApiMessage::message($e->getMessage(), ''));
            } else {
                return response()->json(ApiMessage::message('Houve um erro ao realizar a operação', 500));
            }
        }
    }
    
    public function show($id)
    {
        try {

            $user = new User;
            $resp = $user->showModel($id);
            return response()->json($resp);
            
        } catch (\Exception $e) {
            if (config('app.debug')) { //verifica se o debug está ativo
                return response()->json(ApiMessage::message($e->getMessage(), ''));
            } else {
                return response()->json(ApiMessage::message('Houve um erro ao realizar a operação', 500));
            }
        }
    }
    
    
    public function update(Request $request, $id)
    {
        try {
            $user = new User;
            $resp = $user->updateModel($request, $id);
            if($resp == "sucess"){
                return response()->json(ApiMessage::message('Usuário atualizado com sucesso!', ''));
            }
        } catch (\Exception $e) {
            if (config('app.debug')) { //verifica se o debug está ativo
                return response()->json(ApiMessage::message($e->getMessage(), ''));
            } else {
                return response()->json(ApiMessage::message('Houve um erro ao realizar a operação', 500));
            }
        }
    }
    
    
    public function destroy($id)
    {
        try {
            $user = new User;
            $resp = $user->destroyModel($id);
            if($resp == "sucess"){
                return response()->json(ApiMessage::message('Usuário excluído com sucesso!', ''));
            }
        } catch (\Exception $e) {
            if (config('app.debug')) { //verifica se o debug está ativo
                return response()->json(ApiMessage::message($e->getMessage(), ''));
            } else {
                return response()->json(ApiMessage::message('Houve um erro ao realizar a operação', 500));
            }
        }
    }
        
        public function estatisticas()
    {
        try {
            $user = new User;
            $data = $user->estatisticasModel();
            
            return response()->json($data);
        } catch (\Exception $e) {
            if (config('app.debug')) {
                ApiMessage::message($e->getMessage(), '');
            } else {
                return response()->json('Houve um erro ao realizar a operação, certifique-se se há usuário cadastrado ');
            }
        }
    }
}
