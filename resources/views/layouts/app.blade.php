<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
  <header>

      <nav class="navgeneral">
              <div class="aplicacion">
                  <!--Nombre de la aplicacion -->

                      {{ config('app.name', 'Laravel') }}

              </div>

              <div class="navegacion" id="navegacion">
                <ul class="">
                    <!-- Vinculos de autenticacion -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>

                    @else

                    <!-- Lista contiene opciones de usuario inicialmente logout -->
                        <li class="">
                                <!-- Nombre de usuario -->
                                {{ Auth::user()->name }} <span class=""></span>


                            <ul class="">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
              </div>
      </nav>
    </div>
  </header>
  @if (!Auth::guest())
  <nav class="menu">
        @include('layouts.home')
  </nav>
  @endif
  <article class="Articulo">
        @yield('content')
  </article>

  <!-- Scripts -->
  <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
