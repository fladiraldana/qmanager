@extends('layouts.app')

@section('content')

  <h1 class="titulos">Maestro Paises</h1>

  <div class="ContenedorTabla">
      <table class="tabla">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pais as $paises)
            <tr>
              <td>{{$paises -> codpais}}</td>
              <td>{{$paises -> nompais}}</td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>

          <form class="forma-form" action="{{route('paises.store')}}" method="post">

              {{csrf_field()}}

              @include('formularios.paises.paisesformpartials')

              <button class="forma-form__boton" type="submit">Insertar</button>
          </form>

          <form class="forma-form" action="{{route('paises.masivo_paises')}}" method="post" >
              {{csrf_field()}}
              <label class="forma-form__label" for="archivo">Seleccione el archivo a cargar:</label>
              <input  class="forma-form__boton" type="file" id="archivo" name="archivo" required>
              <button type="submit" class="forma-form__boton">Enviar Archivo</button>
          </form>


  <div class="ContenedorCrud">

      <a class="crud" href="http://qmanager.local:8080/paises/store">Insertar</a>
      <a class="crud" href="http://qmanager.local:8080/paises/index">cancelar</a>

  </div>


@endsection
