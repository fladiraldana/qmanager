<div class="form-group {{$errors->has('codigo') ? 'has-error' : ''}}">
  <label for="codigo">Codigo</label>
  <input type="text" class="formcontrol" id="codigo" name="codigo" placeholder="Codigo" value="{{old('codigo')}}" required>

  @if($errors->has('codigo'))
      <span class="help-block">
          <strong>{{$errors->first('codigo')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('estado') ? 'has-error' : ''}}">
  <label for="estado">Estado Empleado</label>
  <input type="text" class="formcontrol" id="estado" name="estado" placeholder="Estado" value="{{old('estado')}}" required>

  @if($errors->has('estado'))
      <span class="help-block">
          <strong>{{$errors->first('estado')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->
