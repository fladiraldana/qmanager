
@extends('layouts.app'):


@section('title')
    Paises
@endsection

@section('contend')
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

          <form class="Formulario" action="{{route('paises.store')}}" method="post">

              {{csrf_field()}}

              @include('formularios.paises.paisesformpartials')

              <button class="crud" type="submit">Insertar</button>
          </form


  <div class="ContenedorCrud">

      <a class="crud" href="http://qmanager.local:8080/paises/store">Insertar</a>
      <a class="crud" href="http://qmanager.local:8080/paises/index">cancelar</a>

  </div>

@endsection
