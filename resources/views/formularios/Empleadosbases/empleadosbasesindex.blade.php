<div class="form-group">
  <label for="Cliente">cliente</label>
  <select class="formcontrol" id="Cliente" name="Cliente" value="{{old('Cliente')}}" required>
    <option value=""></option>

  </select>

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('base') ? 'has-error' : ''}}">
  <label for="base">Base cliente</label>
  <select class="formcontrol" id="base" name="base" value="{{old('base')}}" required>
    <option value=""></option>

  </select>

  @if($errors->has('base'))
      <span class="help-block {{$errors->has('codigo') ? 'has-error' : ''}}">
          <strong>{{$errors->first('base')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('empleado') ? 'has-error' : ''}}">
  <label for="empleado">empleado</label>
  <select class="formcontrol" id="empleado" name="empleado" value="{{old('empleado')}}" required>
    <option value=""></option>

  </select>

  @if($errors->has('empleado'))
      <span class="help-block">
          <strong>{{$errors->first('empleado')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->
