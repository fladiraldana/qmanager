
@extends('layouts.app')


@section('content')
  <h1 class="titulos">Maestro Departamentos</h1>

  <div class="ContenedorTabla">
      <table class="tabla">
          <thead>
          <tr>
              <th class="ContenedorTabla-titulos">Codigo</th>
              <th class="ContenedorTabla-titulos">Nombre</th>
              <th class="ContenedorTabla-titulos">Pais</th>
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

  <div class="contenedor-modal" id="contenedor-modal">
    <form class="forma-form" action="{{route('departamentos.store')}}" method="post">
        <div class=".contenedor-modalt__cerrar">
          <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModal()">X</a>
        </div>
        {{csrf_field()}}
        @include('formularios.departamentos.departpartials')
        <input class="forma-form__boton" type="submit" value="Insertar">
    </form>
  </div>

  <div class="contenedor-modal" id="contenedor-modal__masiv">
    <form class="forma-form" action="{{route('departamentos.masivo_departamentos')}}" method=POST enctype=multipart/form-data>
        <div class=".contenedor-modalt__cerrar">
          <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModalM()">X</a>
        </div>
        {{csrf_field()}}
        <label class="forma-form__label" for="">Seleccione el archivo a cargar:</label>
        <input  class="forma-form__input" type="file" id="archivo" name="archivo" required>
        <input type="submit" class="forma-form__boton" value="Enviar">
    </form>
  </div>

    <div class="ContenedorCrud">
      <a class="crud" id="abrir-modal" onclick="abrirModal()">Crear</a>
      <a class="crud">Editar</a>
      <a class="crud">Borrar Tabla</a>
      <a class="crud" id="abrir-modal__masiv" onclick="abrirModalM()">Creación Masiva</a>
    </div>
@endsection
