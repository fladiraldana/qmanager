
@extends('layouts.app')

@section('content')

      <h1 class="titulos">Errores Recurrentes</h1>

      <div class="ContenedorTabla">
        <table class="tabla">
          <thead>
            <tr>
              <th class="ContenedorTabla-titulos">Identificador</th>
              <th class="ContenedorTabla-titulos">Error</th>
              <th class="ContenedorTabla-titulos">Proceso</th>
            </tr>
          </thead>
          <tbody>
            @foreach($errorrec as $erroresrec)
              <tr>
                <td>{{$erroresrec -> id}}</td>
                <td>{{$erroresrec -> errorrecurrente}}</td>
                <td>{{$erroresrec -> proceso -> nomproceso}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="contenedor-modal" id="contenedor-modal">
          <form class="forma-form" action="{{route('erroresrecurrentes.store')}}" method="post">
            <div class=".contenedor-modalt__cerrar">
              <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModal()">X</a>
            </div>
            {{csrf_field()}}
            @include('formularios.Erroresrecurrentes.erroresrrecurrentespartials')
            <input class="forma-form__boton" type="submit" name="" value="Insertar">
          </form>
      </div>

      <div class="ContenedorCrud">
        <a  class="crud" id="abrir-modal" onclick="abrirModal()">Nuevo</a>
        <a  class="crud">Editar</a>
        <a  class="crud">Borrar</a>
      </div>
@endsection
