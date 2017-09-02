  <label class="forma-form__label" for="codigo">Codigo</label>
  <input type="text" class="forma-form__input" id="codigo" name="codigo" placeholder="Codigo" value="{{old('codigo')}}" readonly>

  @if($errors->has('codigo'))
      <span class="forma-form__error">
          <p><strong>{{$errors->first('codigo')}}</strong></p>
      </span>
  @endif

<!--___________________________________________________________________________________________-->


  <label class="forma-form__label" for="estado">Estado Empleado</label>
  <input type="text" class="forma-form__input" id="descripcion" name="descripcion" placeholder="Estado" value="{{old('estado')}}" required>

  @if($errors->has('estado'))
      <span class="forma-form__error">
          <p><strong>{{$errors->first('estado')}}</strong></p>
      </span>
  @endif

<!--___________________________________________________________________________________________-->
