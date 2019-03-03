<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function Criar(Request $req)
    {
      $usuario = new Usuario;
      $usuario->login = $req->login;
      $usuario->nome = $req->nome;
      $usuario->senha = $req->senha;
      $usuario->email = $req->email;
      $usuario->save();
    }

    
    public function Atualizar(Request $req, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->login = $req->login;
        $usuario->nome = $req->nome;
        $usuario->senha =$req->senha;
        $usuario->email = $req->email;
        $usuario->save();
    }

    
    public function Listar()
    {
        return Usuario::all();
    }

    public function ListarEspecifico($id)
    {
        return Usuario::findOrFail($id);
    }

    
    public function Excluir($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
    }
}
