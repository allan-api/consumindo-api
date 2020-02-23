<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $user = new User();
        $usuarios = $user->indexModel();
        return view('usuarios.index', compact('usuarios'));
    }
    
    public function create()
    {
        return view('usuarios.cadastro');
    }

    public function update(Request $request)
    {
        $id = $_GET['id'];
        $user = new User();
        $usuario = $user->showModel($id);

        return view('usuarios.editar', compact('usuario'));
    }

    public function destroy()
    {
        return view('usuarios.excluir');
    }
}
