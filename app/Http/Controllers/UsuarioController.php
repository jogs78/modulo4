<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Usuario::all();
        return view("usuarios.listar", compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('password') != $request->input('password2')){
            echo "NO ESTAN BIEN LOS PASSWORDS, INTENTA DE NUEVO";
            return;
        }
     
        $nuevo = new Usuario;
        $nuevo->nombre = $request->input('nombre');
        $nuevo->rol = $request->input('rol');
        $nuevo->password = $request->input('password');
        $nuevo->save();
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seleccionado = Usuario::find($id);
        return view('usuarios.mostrar',compact('seleccionado'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seleccionado = Usuario::find($id);
        return view('usuarios.mostrar2',compact('seleccionado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seleccionado = Usuario::find($id);
        $seleccionado->nombre = $request->input('nombre');
        $seleccionado->rol = $request->input('rol');
        $seleccionado->save();
        return redirect('/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seleccionado = Usuario::find($id);
        $seleccionado->delete();
        return redirect('/usuarios');
    }
}
