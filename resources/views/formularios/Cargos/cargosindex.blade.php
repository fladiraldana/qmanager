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
        <th>nombre cargo</th>
        <th>Codigo interno</th>
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
