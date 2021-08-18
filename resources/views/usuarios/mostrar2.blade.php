@extends('plantillas.principal')

@section('encabezado')
    
@endsection

@section('contenido')

<form action="/usuarios/{{$seleccionado->id}}" method="POST">
  @method('put')
  @csrf
  <div class="form-group">
    Nombre
    <input type="text"  placeholder="Nombre" name="nombre" value="{{$seleccionado->nombre}}">
  </div>
  <div class="form-group">
    Rol
    <select name="rol">
      @if ($seleccionado->rol == "usuario")
        <option value="usuario" selected>Usuario</option>    
        <option value="administrador">Administrador</option>
      @else
        <option value="usuario" >Usuario</option>    
        <option value="administrador" selected>Administrador</option>
      @endif
      
      
      <input type="submit" value="Enviar">


    </select>
  </div>
</form>

@endsection

