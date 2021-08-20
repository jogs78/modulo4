<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Usuario;


class SessionController extends Controller
{
    public function inicio(){
        return view('hola');
    }

    public function credenciales(){
        return view('session.credenciales');
    }

    public function autenticar( Request $peticion){

        //nombre debe ser "juan"
        //contraseña debe ser "paso"
        $bdusrs = Usuario::where('nombre',$peticion->input('nombre'))->get();
        if (sizeof($bdusrs)==0) {
            return view('session.error');
        }else{
            $usr = $bdusrs[0];
            if($usr->password == $peticion->input('clave') ){
                Auth::login($usr);
                return view('session.inicio');    
            }
        }
        return;
    }

    public function salida(){
        Auth::logout();

        return redirect('/');

    }

}
