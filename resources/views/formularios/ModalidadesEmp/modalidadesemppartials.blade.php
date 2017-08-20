

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

<div class="form-group {{$errors->has('modalidad') ? 'has-error' : ''}}">
  <label for="modalidad">Modalidad</label>
  <input type="text" class="formcontrol" id="modalidad" name="modalidad" placeholder="Modalidad" value="{{old('modalidad')}}" required>

  @if($errors->has('modalidad'))
      <span class="help-block">
          <strong>{{$errors->first('modalidad')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->
