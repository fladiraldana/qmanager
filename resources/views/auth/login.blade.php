@extends('layouts.app')

@section('content')

<div class="">


      <form class="loguin-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

              <label for="email" class="loguin-form__label">Correo Electronico</label>
              <input id="email" type="email" class="loguin-form__input" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif



            <label for="password" class="loguin-form__label">Contraseña</label>
            <input id="password" type="password" class="loguin-form__input" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif


          <label class="loguin-form__label">
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
          </label>

          <button type="submit" class="loguin-form__submit">Ingresar</button>

          <a class="loguin-recuperar" href="{{ route('password.request') }}">Recuperar tu contraseña</a>
     </form>

</div>
@endsection
