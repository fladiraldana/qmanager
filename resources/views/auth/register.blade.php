@extends('layouts.app')

@section('content')
          <div class="panel-heading">Register</div>
              <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}


                      <label for="name" class="col-md-4 control-label">Name</label>
                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>

                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>

                      <label for="password" class="col-md-4 control-label">Password</label>
                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control" name="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>

                      <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                      <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                      </div>


                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Register
                          </button>
                      </div>
              </form>
@endsection
