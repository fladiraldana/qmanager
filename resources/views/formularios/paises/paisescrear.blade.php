<!--@extends('layouts.app');

@section('title')
    crear paises
@endsection

@section('contend')

        <form class="Formulario" action="{{route('paises.store')}}" method="post">

            {{csrf_field()}}

            @include(formularios.paises.paisesformpartials)

            <button class="crud" type="submit">Insertar</button>
        </form>


        <div class="ContenedorCrud">

            <a class="crud" href="http://qmanager.local:8080/paises/store">Insertar</a>
            <a class="crud" href="http://qmanager.local:8080/paises/index">cancelar</a>

        </div>
@endsection