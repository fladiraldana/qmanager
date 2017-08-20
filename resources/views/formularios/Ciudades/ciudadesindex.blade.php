@extends('layouts.app')

@section('content')

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

    <form class="forma-form" action="{{route('ciudades.store')}}" method="post">

        {{csrf_field()}}

        @include('formularios.Ciudades.ciudadespartials')

        <button class="forma-form__boton" type="submit">Insertar</button>
    </form>

    <form class="forma-form" action="{{route('ciudades.masivo_ciudades')}}" method=POST enctype=multipart/form-data>
        {{csrf_field()}}
        <label class="forma-form__label" for="archivo">Seleccione el archivo a cargar:</label>
        <input  class="forma-form__boton" type="file" id="archivo" name="archivo" required>
        <button type="submit" class="forma-form__boton">Enviar Archivo</button>
    </form>

      <div class="ContenedorCrud">

          <a class="crud" href="http://qmanager.local:8080/departamentos/create">Insertar</a>
          <a class="crud" href="http://qmanager.local:8080/departamentos/edit">Editar</a>
          <a class="crud" href="http://qmanager.local:8080/departamentos/create">Borrar</a>
      </div>


@endsection
