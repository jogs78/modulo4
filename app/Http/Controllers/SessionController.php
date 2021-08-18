<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $valores= $peticion->all();
        if($valores['nombre'] == "juan" && $valores['clave'] == "paso")
           return view('session.inicio');
        else
           return view('session.error');
    }

    public function salida(){
        echo "ADIOS";

    }

}
