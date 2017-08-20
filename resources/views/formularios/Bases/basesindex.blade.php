@extends('layouts.app')

@section('title')
    bases por cliente
@endsection

@section('content')
    <h1 class="titulos">Bases por clientes</h1>

    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Direccion</th>
            <th>Oficina</th>
            <th>Pais</th>
            <th>Departamento</th>
            <th>Ciudad</th>
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
