<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\funcionarios;
use App\Requests\funcionariosRequest;

class InfoIdosoController extends Controller
{

    public function index(){
        return view ('index');
    }
    public function register(){
        return view ('auth.register');
    }
    public function registerIdoso(){
        session_start();
        $funcionario = new funcionarios();
        $funcionario->id_entidade= $_SESSION['id_entidade'];
        return view ('auth.adicionar', compact('funcionario'));
    }
    public function editarIdoso(){

        return view ('auth.formedita');
    }
    public function detalhesIdoso(){
        return view ('auth.detalhes');
    }
    public function registerRemedios(){
        session_start();
        $funcionario = new funcionarios();
        $funcionario->id_entidade= $_SESSION['id_entidade'];
        return view ('auth.addRemedios', compact('funcionario'));
    }
    public function login(){
        return view ('auth.login');
    }
    public function tutorial(){
        return view ('auth.tutorial');
    }
   /* public function registerRemediosIdoso(){
        return view ('auth.idososRemediosAdd');
    }*/
    public function pessoas(){
        return view ('auth.pessoas');
    }
}
