<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\remedio_idoso;
use App\Requests\remedio_idosoRequest;
use App\idosos;
use App\Requests\IdososRequest;
use App\funcionarios;
use App\remedios;
use App\Requests\remediosRequest;
use App\Requests\funcionariosRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;

class remedio_idosoController extends Controller
{   
    public function lista(Request $request){
        $idoso = idosos::find($request->id); 
        $remedio_idoso = DB::select("SELECT remedio_idoso.id,remedios.nome, remedio_idoso.dosagem, remedio_idoso.horario FROM `remedios`, `remedio_idoso` WHERE remedios.id = remedio_idoso.id_remedio AND remedio_idoso.id_idoso = $request->id");
        return view('auth.idososRemedios')->with('remedio_idoso',$remedio_idoso)->with('nome_idoso',$idoso->nome)->with('id_idoso',$request->id)->with('id_remedio',$remedio_idoso);
    }
    public function escolher(Request $request){
          $params = $request->all();
        remedio_idoso::create($params);

        $idoso = idosos::find($request->id_idoso); 
        $remedio_idoso = DB::select("SELECT remedio_idoso.id,remedios.nome, remedio_idoso.dosagem, remedio_idoso.horario FROM `remedios`, `remedio_idoso` WHERE remedios.id = remedio_idoso.id_remedio AND remedio_idoso.id_idoso = $request->id_idoso");
        return view('auth.idososRemedios')->with('remedio_idoso',$remedio_idoso)->with('nome_idoso',$idoso->nome)->with('id_idoso',$request->id_idoso);
 
    }

    public function remove(Request $request){
        $remedio_idoso = remedio_idoso::find($request->id);
        $remedio_idoso->delete();
        return redirect()->action('remedio_idosoController@lista', ['id'=> $request->id_idoso]);
    }
    public function adicionar(Request $request){

        $remedio_idoso = remedio_idoso::find($request->id_remedio_idoso);
        $remedio_idoso->dosagem = $request->dosagem;
        $remedio_idoso->horario = $request->horario;
        $remedio_idoso->save();
        return redirect()->action('remedio_idosoController@lista', ['id'=> $request->id_idoso] );
  
    }
}
