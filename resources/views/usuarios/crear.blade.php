@extends('plantillas.principal')

@section('encabezado')
    
@endsection

@section('contenido')

<form action="/usuarios" method="POST">
  @csrf
  <div class="form-group">
    Nombre
    <input type="text"  placeholder="Nombre" name="nombre">
  </div>
  <div class="form-group">
  Contraseña
    <input type="password"  placeholder="Contraseña" name="password">
    <input type="password"  placeholder="Repita la contraseña" name="password2">
  </div>
  <div class="form-group">
    Rol
    <select name="rol">
      <option value="usuario">Usuario</option>
      <option value="administrador">Administrador</option>
      <input type="submit" value="Enviar">


    </select>
  </div>
</form>

@endsection

