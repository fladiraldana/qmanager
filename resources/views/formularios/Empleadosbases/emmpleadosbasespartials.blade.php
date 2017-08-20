@extends('layouts.app')


@section('content')

    <h1 class="titulos">Asignacion de emplados por bases</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th>Base Cliente</th>
            <th>Empleado Asignado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="ContenedorCrud">
      <a href="#" class="crud">Insertar</a>
      <a href="#" class="crud">Editar</a>
      <a href="#" class="crud">Borrar</a>
    </div>

@endsection
