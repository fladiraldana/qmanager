
  <label class="forma-form__label" for="codigo">Codigo</label>
  <input type="text" class="forma-form__input" id="codigo" name="codigo" placeholder="codigo" readonly>


  @if($errors->has('codigo'))
      <span class="forma-form__error">
          <p><strong>{{$errors->first('codigo')}}</strong></p>
      </span>
  @endif

<!--___________________________________________________________________________________________-->


  <label class="forma-form__label" for="nombre">Nombre Cargo</label>
  <input type="text" class="forma-form__input" id="nombre" name="nombre" placeholder="Cargo" value="{{old('nombre')}}" required>

  @if($errors->has('nombre'))
      <span class="forma-form__error">
          <p><strong>{{$errors->first('nombre')}}</strong></p>
      </span>
  @endif

<!--___________________________________________________________________________________________-->

  <label class="forma-form__label" for="codinterno">Codigo Interno</label>
  <input type="text" class="forma-form__input" id="codinterno" name="codinterno" placeholder="Codigo Interno" value="{{old('codinterno')}}">


  @if($errors->has('codinterno'))
      <span class="forma-form__error">
          <p><strong>{{$errors->first('codinterno')}}</strong></p>
      </span>
  @endif
