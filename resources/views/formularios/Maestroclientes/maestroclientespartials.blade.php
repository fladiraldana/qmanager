

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

<div class="form-group {{$errors->has('dv') ? 'has-error' : ''}}">
  <label for="dv">Digito de Verificacion</label>
  <input type="text" class="formcontrol" id="dv" name="dv" placeholder="-DV" value="{{old('dv')}}" required>

  @if($errors->has('dv'))
      <span class="help-block">
          <strong>{{$errors->first('dv')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('razonsoc') ? 'has-error' : ''}}">
  <label for="razonsoc">Razon social</label>
  <input type="text" class="formcontrol" id="razonsoc" name="razonsoc" placeholder="Razon Social" value="{{old('razonsoc')}}" required>

  @if($errors->has('razonsoc'))
      <span class="help-block">
          <strong>{{$errors->first('razonsoc')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('estado') ? 'has-error' : ''}}">
  <label for="estado">Estado</label>
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


<div class="form-group {{$errors->has('fecing') ? 'has-error' : ''}}">
  <label for="fecing">Fecha de ingreso</label>
  <input type="text" class="formcontrol" id="fecing" name="fecing" placeholder="Fecha de ingreso" value="{{old('fecing')}}" required>

  @if($errors->has('fecing'))
      <span class="help-block">
          <strong>{{$errors->first('fecing')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('fecsal') ? 'has-error' : ''}}">
  <label for="fecsal">Fecha de salida</label>
  <input type="text" class="formcontrol" id="fecsal" name="fecsal" placeholder="Fecha de salida" value="{{old('fecsal')}}" required>

  @if($errors->has('fecsal'))
      <span class="help-block">
          <strong>{{$errors->first('fecsal')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->
