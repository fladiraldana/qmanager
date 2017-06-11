
@extends('layouts.app'):


@section('title')
    Departamentos
@endsection

@section('contend')
  <h1 class="titulos">Maestro Departamentos</h1>

  <div class="ContenedorTabla">
      <table class="tabla">
          <thead>
          <tr>
              <th>Codigo</th>
              <th>Nombre</th>
          </tr>
          </thead>
          <tbody>
          @foreach($departamento as $departamentos)
              <tr>
                  <td>{{$departamentos -> codedepart}}</td>
                  <td>{{$departamentos -> nomdepart}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
  </div>


    <div class="ContenedorCrud">

        <a class="crud" href="http://qmanager.local:8080/paises/create">Insertar</a>
        <a class="crud" href="http://qmanager.local:8080/paises/edit">Editar</a>
        <a class="crud" href="http://qmanager.local:8080/paises/create">Borrar</a>
    </div>
@endsection
