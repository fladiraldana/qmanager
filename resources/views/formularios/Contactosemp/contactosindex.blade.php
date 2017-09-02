
@extends('layouts.app')

@section('content')

      <h1 class="titulos">Contactos del empleado</h1>

      <div class="ContenedorTabla">
        <table class="tabla">
          <thead>
            <tr>
              <th class="ContenedorTabla-titulos">Colaborador</th>
              <th class="ContenedorTabla-titulos">Correo electronico</th>
              <th class="ContenedorTabla-titulos">Telefono</th>
              <th class="ContenedorTabla-titulos">Extencion</th>
              <th class="ContenedorTabla-titulos">Tel Movil</th>
            </tr>
          </thead>
          <tbody>
            @foreach($contactoe as $contactose)
            <tr>
              <td>{{$consctose -> empleado_id}}</td>
              <td>{{$consctose -> email}}</td>
              <td>{{$consctose -> telefono}}</td>
              <td>{{$consctose -> estencion}}</td>
              <td>{{$consctose -> movil}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="contenedor-modal" id="contenedor-modal">
          <form class="forma-form" action="{{route('contactoemp.store')}}" method="post">
              <div class=".contenedor-modalt__cerrar">
                <a class="contenedor-modal__cerrar" id="cerrar-modal" onclick="cerrarModal()">X</a>
              </div>
              {{csrf_field()}}
              @include('formularios.Contactosemp.contactospartials')
              <input class="forma-form__boton" type="submit" name="" value="Insertar">
          </form>
      </div>

      <div class="ContenedorCrud">
        <a class="crud" id="abrir-modal" onclick="abrirModal()">Crear</a>
        <a class="crud">Editar</a>
        <a class="crud">Borrar Tabla</a>
      </div>
@endsection
