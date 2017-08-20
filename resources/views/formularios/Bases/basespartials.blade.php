

<div class="form-group {{$errors->has('codigo') ? 'has-error' : ''}}">
  <label for="codigo">Codigo</label>
  <input type="text" class="formcontrol" id="codigo" name="codigo" placeholder="Codigo" value="{{old('codigo')}}" required>

  @if($errors->has('descripcion'))
      <span class="help-block">
          <strong>{{$errors->first('descripcion')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('base') ? 'has-error' : ''}}">
  <label for="base">Base</label>
  <select class="formcontrol" id="base" name="base" value="{{old('base')}}" required>
    <option value=""></option>

  </select>

  @if($errors->has('descripcion'))
      <span class="help-block">
          <strong>{{$errors->first('descripcion')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('cliente') ? 'has-error' : ''}}">
  <label for="cliente">Cliente</label>
  <select class="formcontrol" id="cliente" name="cliente" value="{{old('cliente')}}" required>
    <option value=""></option>

  </select>

  @if($errors->has('descripcion'))
      <span class="help-block">
          <strong>{{$errors->first('descripcion')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('estado') ? 'has-error' : ''}}">
  <label for="estado">Estado</label>
  <select class="formcontrol" id="estado" name="estado" value="{{old('estado')}}">
    <option value=""></option>

  </select>

  @if($errors->has('descripcion'))
      <span class="help-block">
          <strong>{{$errors->first('descripcion')}}</strong>
      </span>
  @endif

</div>
