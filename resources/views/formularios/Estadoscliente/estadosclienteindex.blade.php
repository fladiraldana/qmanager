@extends('layouts.app')


@section('content')

    <h1 class="titulos">Estados Clientes</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th>ID</th>
            <th>Estado</th>
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

    <div class="ContenedorCurd">
      <a href="#" class="crud">Insertar</a>
      <a href="#" class="crud">Editar</a>
      <a href="#" class="crud">Borrar</a>
    </div>


@endsection
