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

class IdosoController extends Controller
{
    

    public function lista() {
        session_start();
        $idosos = DB::select("SELECT * FROM `idosos` WHERE `idosos`.`id_entidade` = $_SESSION[id_entidade]");
        return view('auth.listagem')->with('idosos', $idosos);  
    }
   

    public function new (Request $request) {
        

        $nameFile = null;
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $name = uniqid(date('HisYmd'));
            $extension = $request->foto->extension();
            $nameFile="{$name}.{$extension}";
            $upload = $request->foto->storeAs('imagens', $nameFile);
        }   

        if(!$upload){
            return redirect()
                ->back()
                ->with('error','Falha ao realizar upload')
                ->withInput();
        }

        $params = $request->all();
        $params['foto'] = $nameFile;
    

        idosos::create($params);
        return redirect()->action('IdosoController@lista');
    }
    
    public function remove($id) {
        $idosos = idosos::find($id);
        $remedio_idosos = remedio_idoso::where('id_idoso', $id)->get();
        foreach ($remedio_idosos as $remedio_idoso) {
            $remedio_idoso->delete();
        }
        $idosos->delete();
        return redirect()->action('IdosoController@lista');
    }
    
     public function edit(Request $request, $id) {
        $idosos = idosos::find($id);
        $title ="editar idoso: {$idosos-> nome}";
        $categorys =['nome','dia','mes','ano','sexo','rg','cpf','doencap','descricaop','doencaf','descricaof','alimentacao','descricaoal','remedio','dosagem','horario','telefone1','telefone2','responsavel1','responsavel2','cep','cidade','rua','bairro','uf','foto'] ;
        
       return view ('auth.formedita', compact('title','categorys','idosos'));

    }


  public function update(Request $request) {
        $idoso = idosos::find($request->id);
        $idoso->fill($request->all());
        $idoso->save();
        return redirect()->action('IdosoController@lista');
    }


     public function show($id){
        $idosos = idosos::find($id);
        $title ="editar idoso: {$idosos-> nome}";
        $categorys =['nome','dia','mes','ano','sexo','rg','cpf','doencap','descricaop','doencaf','descricaof','alimentacao','descricaoal','remedio','dosagem','horario','telefone1','telefone2','responsavel1','responsavel2','cep','cidade','rua','bairro','uf','foto'] ;
        return view('auth.detalhes', compact('title','categorys','idosos'));
    }
}
