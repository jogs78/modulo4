@extends('plantillas.principal')

@section('encabezado')
    <a href="salir">SALIR</a>
@endsection

@section('contenido')

@can('create', App\Models\Usuario::class)
  <a class="btn btn-primary btn-block" href="usuarios/create">Agregar</a>  
@endcan



<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Materias</th>
        <th scope="col">Rol</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($todos as $usuario)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$usuario->nombre}}</td>
            <td>
              @forelse ($usuario->Materias as $Materia)
                  <li>{{$Materia->nombre}}</li>
              @empty
                  NO TIENE MATERIAS
              @endforelse
            </td>
            <td>{{$usuario->rol}}</td>
            <td>
                <a href="/usuarios/{{$usuario->id}}" class="btn btn-secondary">VER</a>
  
                @can('update', $usuario)
                  <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-warning">MODIFICAR</a>                
                @endcan
                @can('delete', $usuario)
                  <form action="/usuarios/{{$usuario->id}}" method="POST" style="display: inline">
                      @method('DELETE')
                      @csrf
                      <input type="submit" class="btn btn-danger" value="BORRAR">
                  </form>
                @endcan
                

            </td>
          </tr>            
        @endforeach

    </tbody>
  </table>
@endsection

