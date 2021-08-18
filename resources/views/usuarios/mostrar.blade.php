@extends('plantillas.principal')

@section('encabezado')
    
@endsection

@section('contenido')
 {{$seleccionado->nombre}} es {{$seleccionado->rol}}
@endsection

