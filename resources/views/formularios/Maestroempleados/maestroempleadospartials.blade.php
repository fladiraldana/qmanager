

<div class="form-group {{$errors->has('empleado') ? 'has-error' : ''}}">
  <label for="empleado">Empleado</label>
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

<div class="form-group {{$errors->has('fecnac') ? 'has-error' : ''}}">
  <label for="fecnac">Fecha de Nacimiento</label>
  <input type="text" class="formcontrol" id="fecnac" name="fecnac" placeholder="Fecha de nacimiento" value="{{old('fecnac')}}" required>

  @if($errors->has('fecnac'))
      <span class="help-block">
          <strong>{{$errors->first('fecnac')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('estado') ? 'has-error' : ''}}">
  <label for="estado">estado</label>
  <select class="formcontrol" id="estado" name="estado" value="{{old('estado')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('estado'))
      <span class="help-block">
          <strong>{{$errors->first('estado')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('cargo') ? 'has-error' : ''}}">
  <label for="cargo">cargo</label>
  <select class="formcontrol" id="cargo" name="cargo" value="{{old('cargo')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('cargo'))
      <span class="help-block">
          <strong>{{$errors->first('cargo')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('modalidad') ? 'has-error' : ''}}">
  <label for="modalidad">modalidad</label>
  <select class="formcontrol" id="modalidad" name="modalidad" value="{{old('modalidad')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('modalidad'))
      <span class="help-block">
          <strong>{{$errors->first('modalidad')}}</strong>
      </span>
  @endif

</div>

<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('sucursal') ? 'has-error' : ''}}">
  <label for="sucursal">Sucursal</label>
  <select class="formcontrol" id="sucursal" name="sucursal" value="{{old('sucursal')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('sucursal'))
      <span class="help-block">
          <strong>{{$errors->first('sucursal')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->
