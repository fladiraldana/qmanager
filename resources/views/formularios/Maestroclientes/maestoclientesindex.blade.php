@extends('layouts.app')

@section('content')

<h1 class="titulos"></h1>
<div class="ContenedorTabla">
  <table class="tabla">
    <thead>
      <tr>
        <th>Cliente</th>
        <th>DV</th>
        <th>Razon Social</th>
        <th>Estado</th>
        <th>Fecha de ingreso</th>
        <th>Fecha de retiro</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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
