@extends('layouts.app')

@section('content')

  <h1 class="titulos">Maestro Paises</h1>

  <div class="ContenedorTabla">
      <table class="tabla">
          <thead>
            <tr>
              <th class="ContenedorTabla-titulos">Codigo</th>
              <th class="ContenedorTabla-titulos">Nombre</th>
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

  <div class="contenedor-modal" id="contenedor-modal">
          <form class="forma-form" action="{{route('paises.store')}}" method="post">
            <div class=".contenedor-modalt__cerrar">
              <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModal()">X</a>
            </div>
              {{csrf_field()}}
              @include('formularios.paises.paisesformpartials')
              <input class="forma-form__boton" type="submit" name="" value="Insertar">
          </form>
        </div>

        <div class="contenedor-modal" id="contenedor-modal__masiv">
          <form class="forma-form" action="{{route('paises.masivo_paises')}}" method="post" >
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
