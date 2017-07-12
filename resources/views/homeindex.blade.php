@extends('layouts.app')

@section('title')
    Home
@endsection

@section('contend')

    <div class="container">

        <ul id="nav">
            <li><a href="http://qmanager.local:8080">Home</a></li>
            <li><a class="hsubs" href="#">Maestros</a>
                <ul class="subs">
                    <li><a href="{{url('paises')}}">Paises</a></li>
                    <li><a href="{{url('departamentos')}}">Departamentos </a></li>
                    <li><a href="{{url('ciudades')}}">Ciudades</a></li>
                    <li><a href="{{url('empestados')}}">Estado Empleado</a></li>
                    <li><a href="#">Estado Cliente</a></li>
                    <li><a href="#">Cargos</a></li>
                </ul>
            </li>
            <li><a class="hsubs" href="#">Configuracion</a>
                <ul class="subs">
                    <li><a href="#">Errores Recurrentes</a></li>
                    <li><a href="#">Procesos</a></li>
                    <li><a href="#">Usuarios</a></li>
                </ul>
            </li>
            <li><a class="hsubs" href="#">Empleados</a>
                <ul class="subs">
                    <li><a href="#">Creacion Empleado</a></li>
                    <li><a href="#">Contactos Empleado</a></li>
                    <li><a href="#">Asignacion Clientes</a></li>
                    <li><a href="#">Submenu 3-4</a></li>
                    <li><a href="#">Submenu 3-5</a></li>
                </ul>
            </li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Solicitudes</a></li>
            <div id="lavalamp"></div>
        </ul>

    </div>

@endsection
