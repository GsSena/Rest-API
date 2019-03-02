<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function Criar(Request $req)
    {
      return $req->all();
    }

    
    public function Atualizar(Request $req, $id)
    {
        return 'VC actualizou'.$id;
    }

    
    public function Listar()
    {
        return Usuario::all();
    }

    public function ListarEspecifico($id)
    {
        return 'Lstou?'.$id;
    }

    
    public function Excluir($id)
    {
        return 'Deletou viado'.$id;
    }
}
