<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\remedios;
use App\Requests\IdososRequest;
use App\idosos;
use App\Requests\remediosRequest;
use Illuminate\Support\Facades\DB;
class RemedioController extends Controller
{
    public function lista() {
        session_start();
        $remedios = DB::select("SELECT * FROM `remedios` WHERE `remedios`.`id_entidade` = $_SESSION[id_entidade]");
        return view('auth.listaRemedios')->with('remedios', $remedios);
    }
    public function lista2($id) {
        session_start();
        $remedios = DB::select("SELECT * FROM `remedios` WHERE `remedios`.`id_entidade` = $_SESSION[id_entidade]");
        return view('auth.novoremedio')->with('remedios', $remedios)->with('id_idoso', $id);
    }

    public function new (Request $request) {
        $params1 = array(
            'nome'=>$request->nome, 
            'descricao'=>$request->descricao, 
            'id_entidade'=>$request->id_entidade
        );
        remedios::create($params1);
        return redirect()->action('RemedioController@lista');
    }
    
    public function remove($id) {
        $remedios = remedios::find($id);
        $remedios->delete();
        return redirect()->action('RemedioController@lista');
    }
    public function escolher($id){
      //  $remedio_idoso=
    }
}
