
@extends('layouts.app')


@section('content')
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


  <form class="forma-form" action="{{route('departamentos.store')}}" method="post">

      {{csrf_field()}}

      @include('formularios.departamentos.departpartials')

      <button class="forma-form__boton" type="submit">Insertar</button>

  </form>

  <form class="forma-form" action="{{route('departamentos.masivo_departamentos')}}" method=POST enctype=multipart/form-data>
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
