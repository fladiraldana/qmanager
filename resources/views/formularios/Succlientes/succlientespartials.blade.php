

<div class="form-group {{$errors->has('cliente') ? 'has-error' : ''}}">
  <label for="cliente">Cliente</label>
  <select class="formcontrol" id="cliente" name="cliente" value="{{old('cliente')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('cliente'))
      <span class="help-block">
          <strong>{{$errors->first('cliente')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('direccion') ? 'has-error' : ''}}">
  <label for="direccion">Direccion</label>
  <input type="text" class="formcontrol" id="direccion" name="direccion" placeholder="Direccion" value="{{old('direccion')}}" required>

  @if($errors->has('direccion'))
      <span class="help-block">
          <strong>{{$errors->first('direccion')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('oficina') ? 'has-error' : ''}}">
  <label for="oficina">Oficina</label>
  <input type="text" class="formcontrol" id="oficina" name="oficina" placeholder="Oficina" value="{{old('oficina')}}" required>

  @if($errors->has('oficina'))
      <span class="help-block">
          <strong>{{$errors->first('oficina')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('pais') ? 'has-error' : ''}}">
  <label for="pais">Pais</label>
  <select class="formcontrol" id="cliente" name="pais" value="{{old('pais')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('pais'))
      <span class="help-block">
          <strong>{{$errors->first('pais')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('depart') ? 'has-error' : ''}}">
  <label for="depart">Departamento</label>
  <select class="formcontrol" id="cliente" name="depart" value="{{old('depart')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('depart'))
      <span class="help-block">
          <strong>{{$errors->first('depart')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('ciudad') ? 'has-error' : ''}}">
  <label for="ciudad">Ciudad</label>
  <select class="formcontrol" id="ciudad" name="ciudad" value="{{old('ciudad')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('ciudad'))
      <span class="help-block">
          <strong>{{$errors->first('ciudad')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->
