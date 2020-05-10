<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\funcionarios;
use App\Requests\funcionariosRequest;
use Illuminate\Support\Facades\DB;
use App\User;

class funcController extends Controller
{
     public function __construct()
    {
        $this->middleware('guest');
    }

       public function user()
    {
        return view('index');
    }
    public function cadastro(Request $request) {
        $email = funcionarios::where('email', $request->email)->get();
        if(isset($email)) {
            $message = "Email já cadastrado";
            echo "<script type='text/javascript'>alert('$message'); history.go(-1)</script>";
            //header("location:javascript://history.go(-2)");
        } else {
        $params = $request->all();
        funcionarios::create($params);
        return view('auth.login');
        }
    }
    
    public function entrar(Request $request){
         $funcionario = new funcionarios;
         $funcionario->id = 0;
         $funcionario->email = $request->email;
         $funcionario->password = $request->password;
         
         $results = DB::table('funcionarios')->where('email', $funcionario->email)->where('password',  $funcionario->password)->first();
         
         if($results){
            $funcionario = $results;

            session_start();

            $_SESSION['email'] = $funcionario->email;
            $_SESSION['password'] = $funcionario->password;
            $_SESSION['id_entidade'] = $funcionario->id_entidade;
            
            return redirect()->action('IdosoController@lista');
         }else{
            $message = "Email e/ou Senha Inválidos";
            echo "<script type='text/javascript'>alert('$message'); history.go(-1)</script>";
            
         }  
        }

        public function sair(){
            session_start();
            if(isset($_SESSION['id_entidade'])){
                session_destroy();
                header("location: /home");
                exit();
            } else {

            }
        }
}
