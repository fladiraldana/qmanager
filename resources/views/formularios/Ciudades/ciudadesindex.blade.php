@extends('layouts.app')

@section('title')
  Ciudades
@endsection

@section('contend')

    <h1 class="titulos">Maestro ciudades</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Ciudad</th>
            <th>Departamento</th>
          </tr>
        </thead>
        <tbody>
          @foreach($ciudad as $ciudades)
          <tr>
            <td>{{$ciudades->codciudad}}</td>
            <td>{{$ciudades->nameciudad}}</td>
            <td>{{$ciudades->departamento -> nomdepart}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>

    <form class="Formulario" action="{{route('ciudades.store')}}" method="post">

        {{csrf_field()}}

        @include('formularios.Ciudades.ciudadespartials')

        <button class="crud" type="submit">Insertar</button>

      <div class="ContenedorCrud">

          <a class="crud" href="http://qmanager.local:8080/departamentos/create">Insertar</a>
          <a class="crud" href="http://qmanager.local:8080/departamentos/edit">Editar</a>
          <a class="crud" href="http://qmanager.local:8080/departamentos/create">Borrar</a>
      </div>


@endsection
