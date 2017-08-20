@extends('layouts.app')


@section('content')
    <h1 class="titulos">Estados empleados</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th>Identificador</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($empestado as $empestados)
          <tr>
            <td>{{$empestados->id}}</td>
            <td>{{$empestados->estado}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <form action="{{route('empestados.store')}}" method="post" class="Formulario">

        {{csrf_field()}}

        @include('formularios.estadoemp.estadoemppartials')

      <button class="crud" type="submit">Insertar </button>
      <div class="ContendorCrud">

          <a href="#" class="crud">Insertar</a>
          <a href="#" class="crud">Editar</a>
          <a href="#" class="crud">Borrar</a>
          <a href="#" class="crud">Cancelar</a>
      </div>
    </form>
@endsection
