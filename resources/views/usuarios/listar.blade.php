@extends('plantillas.principal')

@section('encabezado')
    
@endsection

@section('contenido')

<a class="btn btn-primary btn-block" href="usuarios/create">Agregar</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Rol</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($todos as $usuario)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->rol}}</td>
            <td>
                <a href="/usuarios/{{$usuario->id}}" class="btn btn-secondary">VER</a>
                <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-warning">MODIFICAR</a>
                <form action="/usuarios/{{$usuario->id}}" method="POST" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger" value="BORRAR">
                </form>
                

            </td>
          </tr>            
        @endforeach

    </tbody>
  </table>
@endsection

