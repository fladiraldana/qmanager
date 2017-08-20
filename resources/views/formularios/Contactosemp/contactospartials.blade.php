

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

<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
  <label for="email">Correo Electronico</label>
  <input type="text" class="formcontrol" id="email" name="email" placeholder="Correo electronico" value="{{old('email')}}" required>

  @if($errors->has('email'))
      <span class="help-block">
          <strong>{{$errors->first('email')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('telefono') ? 'has-error' : ''}}">
  <label for="telefono">Telefono</label>
  <input type="text" class="formcontrol" id="telefono" name="telefono" placeholder="telefono" valu="{{old('telefono')}}" required>

  @if($errors->has('telefono'))
      <span class="help-block">
          <strong>{{$errors->first('telefono')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('extencion') ? 'has-error' : ''}}">
  <label for="extencion">Extencion</label>
  <input type="text" class="formcontrol" id="extencion" name="extencion" placeholder="Extencion" value="{{old('extencion')}}" required>

  @if($errors->has('extencion'))
      <span class="help-block">
          <strong>{{$errors->first('extencion')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('Movil') ? 'has-error' : ''}}">
  <label for="Movil">Telefono Movil</label>
  <input type="text" class="formcontrol" id="Movil" name="Movil" placeholder="Tel Movil" value="{{old('movil')}}" required>

  @if($errors->has('Movil'))
      <span class="help-block">
          <strong>{{$errors->first('Movil')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->
