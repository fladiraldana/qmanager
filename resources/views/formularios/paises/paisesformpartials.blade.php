

    <label  class="forma-form__label"for="codigo">Codigo</label>
    <input type="text" class="forma-form__input" required name="codigo" id="codigo" placeholder="Codigo DIAN del pais" value="{{old('codigo')}}">

        @if($errors->has('codigo'))
            <span class="forma-form__error">
                <strong>{{$errors -> first('codigo')}}</strong>
             </span>
        @endif


    <label class="forma-form__label" for="descripcion">Descripcion</label>
    <input type="text" class="forma-form__input" required  name="descripcion" id="descripcion" placeholder="Pais" value="{{old('descripcion')}}">

        @if($errors->has('descripcion'))
            <span class="forma-form__error">
                <strong>{{$errors->first('descripcion')}}</strong>
            </span>
        @endif
