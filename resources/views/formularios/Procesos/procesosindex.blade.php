
@extends('layouts.app')


@section('content')

    <h1 class="titulos">Procesos a revisar</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th>Id</th>
            <th>Proceso</th>
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

    <form class="forma-form" action="{{route('procesos.store')}}" method="post">

        {{csrf_field()}}

        @include('formularios.Procesos.procesospartials')

        <button class="crud" type="submit">Insertar</button>

    <div class="ContenedorCrud">
      <a href="#" class="crud">Insertar</a>
      <a href="#" class="crud">Editar</a>
      <a href="#" class="crud">Borrar</a>
    </div>

@endsection
