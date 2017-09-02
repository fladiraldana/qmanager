@extends('layouts.app')


@section('content')

    <h1 class="titulos">Estados Clientes</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th class="ContenedorTabla-titulos">ID</th>
            <th class="ContenedorTabla-titulos">Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($estadoc as  $estadocs)
          <tr>
            <td>{{$estadocs -> id}}</td>
            <td>{{$estadocs -> estado}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="contenedor-modal" id="contenedor-modal">
        <form class="forma-form" action="{{route('estadocliente.store')}}" method="post">
            <div class=".contenedor-modalt__cerrar">
              <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModal()">X</a>
            </div>
            {{csrf_field()}}
            @include('formularios.Estadoscliente.estadosclientepartials')
            <input class="forma-form__boton" type="submit" name="" value="Insertar">
        </form>
    </div>



    <div class="ContenedorCrud">
      <a class="crud" id="abrir-modal" onclick="abrirModal()">Crear</a>
      <a class="crud">Editar</a>
      <a class="crud">Borrar Tabla</a>
    </div>


@endsection
