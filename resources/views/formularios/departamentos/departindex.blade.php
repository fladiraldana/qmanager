
@extends('layouts.app')


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
              <th>Pais</th>
          </tr>
          </thead>
          <tbody>
          @foreach($departamento as $departamentos)
              <tr>
                  <td>{{$departamentos -> codedepart}}</td>
                  <td>{{$departamentos -> nomdepart}}</td>
                  <td>{{$departamentos -> pais -> nompais}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
  </div>


  <form class="Formulario" action="{{route('departamentos.store')}}" method="post">

      {{csrf_field()}}

      @include('formularios.departamentos.departpartials')

      <button class="crud" type="submit">Insertar</button>

    <div class="ContenedorCrud">

        <a class="crud" href="http://qmanager.local:8080/departamentos/create">Insertar</a>
        <a class="crud" href="http://qmanager.local:8080/departamentos/edit">Editar</a>
        <a class="crud" href="http://qmanager.local:8080/departamentos/create">Borrar</a>
    </div>
@endsection
