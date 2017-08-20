
@extends('layouts.app'):


@section('content')

    <h1 class="titulos"></h1>
    <div class="ContenedorTabla">
      <table class="tabla">
        <thead>
          <tr>
            <th>Base</th>
            <th>Cant Empleados</th>
            <th>Analista</th>
            <th>fecha corte</th>
            <th>Fecha recepcion</th>
            <th>Hora Recepcion</th>
            <th>Fecha validacion</th>
            <th>Hora validacion</th>
            <th>Fecha Entrega</th>
            <th>Hora Entrega</th>
            <th>Proceso</th>
            <th>Orden Val</th>
            <th>Controller</th>
            <th>Observaciones</th>
            <th>Contiene Error</th>
            <th>Fue Aprobado</th>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
