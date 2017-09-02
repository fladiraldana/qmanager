

  <label class="forma-form__label"for="codigo">Identificador</label>
  <input type="text" class="forma-form__input" name="codigo"  id="codigo" readonly>
    @if($errors->has('codigo'))
      <span class="forma-form__error">
          <strong>{{$errors->first('codigo')}}</strong>
      </span>
    @endif


  <label class="forma-form__label" for="descripcion">Estado</label>
  <input type="text" class="forma-form__input" name="descripcion" id="descripcion" placeholder="Estado" value="{{old('descripcion')}}" required>
@if($errors->has('descripcion'))
  <span class="forma-form__error">
    <p><strong>{{$errors->first('descripcion')}}</strong></p>
  </span>
@endif
