
@extends('layouts.app')

@section('content')

      <h1 class="titulos">Contactos del empleado</h1>

      <div class="ContenedorTabla">
        <table class="tabla">
          <thead>
            <tr>
              <th>Colaborador</th>
              <th>Correo electronico</th>
              <th>Telefono</th>
              <th>Extencion</th>
              <th>Tel Movil</th>
            </tr>
          </thead>
          <tbody>
            <tr>
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
