

  <label for="codigo" class="forma-form__label">Codigo:</label>
  <input type="text" class="forma-form__input" id="codigo" name="codigo" placeholder="" value="{{old('codigo')}}" disabled>

  @if($errors->has('codigo'))
      <span class="help-block">
          <strong>{{$errors->first('codigo')}}</strong>
      </span>
  @endif

<!--___________________________________________________________________________________________-->

  <label for="proceso" class="forma-form__label">Proceso:*</label>
  <input type="text" class="forma-form__input" id="proceso" name="proceso" placeholder="" value="{{old('proceso')}}" required>

  @if($errors->has('proceso'))
      <span class="help-block">
          <strong>{{$errors->first('proceso')}}</strong>
      </span>
  @endif

<!--___________________________________________________________________________________________-->
