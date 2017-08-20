
<div class="form-group {{$errors->has('codigo') ? 'has-error' : ''}}">
  <label for="codigo">Codigo</label>
  <input type="text" class="formcontrol" id="codigo" name="codigo" placeholder="codigo" required>


  @if($errors->has('codigo'))
      <span class="help-block">
          <strong>{{$errors->first('codigo')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
  <label for="nombre">Nombre Cargo</label>
  <input type="text" class="formcontrol" id="nombre" name="nombre" placeholder="Nombre Cargo" value="{{old('nombre')}}" required>

  @if($errors->has('nombre'))
      <span class="help-block">
          <strong>{{$errors->first('nombre')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('codinterno') ? 'has-error' : ''}}">
  <label for="codinterno">Codigo Interno</label>
  <input type="text" class="formcontrol" id="codinterno" name="codinterno" placeholder="Codigo Interno" value="{{old('codinterno')}}" required>


  @if($errors->has('codinterno'))
      <span class="help-block">
          <strong>{{$errors->first('codinterno')}}</strong>
      </span>
  @endif

</div>
