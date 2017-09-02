@extends('layouts.app')

@section('title')
    Cargos
@endsection

@section('content')

<h1 class="titulos">Maestro Cargos.</h1>

<div class="ContenedorTabla">
  <table class="tabla">
    <thead >
      <tr>
        <th class="ContenedorTabla-titulos">ID</th>
        <th class="ContenedorTabla-titulos">nombre cargo</th>
        <th class="ContenedorTabla-titulos">Codigo interno</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cargo as $cargos)
      <tr>
        <td>{{$cargos -> id}}</td>
        <td>{{$cargos -> nomcargo}}</td>
        <td>{{$cargos -> codinterno}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="contenedor-modal" id="contenedor-modal">
    <form class="forma-form" action="{{route('cargos.store')}}" method="post">
        <div class=".contenedor-modalt__cerrar">
          <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModal()">X</a>
        </div>
        {{csrf_field()}}
        @include('formularios.cargos.cargospartials')
        <input class="forma-form__boton" type="submit" name="" value="Insertar">
    </form>
</div>


<div class="ContenedorCrud">
  <a class="crud" id="abrir-modal" onclick="abrirModal()">Crear</a>
  <a class="crud">Editar</a>
  <a class="crud">Borrar Tabla</a>
</div>

@endsection
