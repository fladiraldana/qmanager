

<div class="form-group {{$errors->has('codigo') ? 'has-error' : ''}}">

  <label for="codigo">Identificador</label>
  <input type="text" class="form-control" name="codigo"  id="codigo" readonly>
    @if($errors->has('codigo'))
      <span class="help-block">
          <strong>{{$errors->first('codigo')}}</strong>
      </span>
    @endif

</div>

<div class="form-group {{$errors->has('descripcion') ? 'has-error' : ''}}">
  <label for="descripcion">Estado</label>
  <input type="text" class="form-control"´name="descripcion" id="descripcion" placeholder="Estado" value="{{old('descripcion')}}" required>

  <span class="help-block">
    <strong></strong>
  </span>


</div>
