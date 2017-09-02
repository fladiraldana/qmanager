

  <label class="forma-form__label" for="empleado">Empleado</label>
  <select class="forma-form__input" id="empleado" name="empleado" value="{{old('empleado')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('empleado'))
      <span class="forma-form__error">
          <strong>{{$errors->first('empleado')}}</strong>
      </span>
  @endif

<!--___________________________________________________________________________________________-->

  <label class="forma-form__label" for="email">Correo Electronico</label>
  <input type="text" class="forma-form__input" id="email" name="email" placeholder="Correo electronico" value="{{old('email')}}" required>

  @if($errors->has('email'))
      <span class="forma-form__error">
          <strong>{{$errors->first('email')}}</strong>
      </span>
  @endif
<!--___________________________________________________________________________________________-->

  <label class="forma-form__label" for="telefono">Telefono</label>
  <input type="text" class="forma-form__input" id="telefono" name="telefono" placeholder="telefono" valu="{{old('telefono')}}" required>

  @if($errors->has('telefono'))
      <span class="forma-form__error">
          <strong>{{$errors->first('telefono')}}</strong>
      </span>
  @endif
<!--___________________________________________________________________________________________-->

  <label class="forma-form__label" for="extencion">Extencion</label>
  <input type="text" class="forma-form__input" id="extencion" name="extencion" placeholder="Extencion" value="{{old('extencion')}}" required>

  @if($errors->has('extencion'))
      <span class="forma-form__error">
          <strong>{{$errors->first('extencion')}}</strong>
      </span>
  @endif
<!--___________________________________________________________________________________________-->

  <label class="forma-form__label" for="Movil">Telefono Movil</label>
  <input type="text" class="forma-form__input" id="Movil" name="Movil" placeholder="Tel Movil" value="{{old('movil')}}" required>

  @if($errors->has('Movil'))
      <span class="forma-form__error">
          <strong>{{$errors->first('Movil')}}</strong>
      </span>
  @endif
<!--___________________________________________________________________________________________-->
