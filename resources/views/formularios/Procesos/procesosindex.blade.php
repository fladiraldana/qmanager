
@extends('layouts.app')


@section('content')

    <h1 class="titulos">Procesos a revisar</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th class="ContenedorTabla-titulos">Id</th>
            <th class="ContenedorTabla-titulos">Proceso</th>
          </tr>
        </thead>
        <tbody>
          @foreach($proceso as $procesos)
            <tr>
              <td>{{$procesos->id}}</td>
              <td>{{$procesos->nomproceso}}</td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>

    <div class="contenedor-modal" id="contenedor-modal">
    <form class="forma-form" action="{{route('procesos.store')}}" method="post">
        <div class=".contenedor-modalt__cerrar">
          <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModal()">X</a>
        </div>
        {{csrf_field()}}
        @include('formularios.Procesos.procesospartials')
        <button class="crud" type="submit">Insertar</button>
    </form>
    </div>

    <div class="ContenedorCrud">
      <a class="crud" id="abrir-modal" onclick="abrirModal()">Crear</a>
      <a class="crud">Editar</a>
      <a class="crud">Borrar Tabla</a>
    </div>

@endsection
