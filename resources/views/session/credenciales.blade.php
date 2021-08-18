@extends('plantillas.principal')

@section('encabezado')
    
@endsection

@section('contenido')
<form action="validar" method="POST">
    @csrf
    nombre: <input type="text" name="nombre" id="">
    password : <input type="text" name="clave" id="">
    <input type="submit" value="ENVIAR">
</form>
@endsection
