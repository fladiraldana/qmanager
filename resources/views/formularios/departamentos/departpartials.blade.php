

<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label class="forma-form__label" for="codigo">Codigo</label>
    <input type="text" class="forma-form__input" name="codigo" id="codigo" placeholder="Codigo DIAN del departamento" value="{{old('codigo')}}" required>

        @if($errors->has('codigo'))
            <span class="help-block">
                  <strong>{{$errors -> first('codigo')}}</strong>
             </span>
        @endif
</div>
<!--___________________________________________________________________________________________-->

<div class="form-group{{$errors->has('descripcion') ? 'has-error' : ''}}">

    <label class="forma-form__label" for="descripcion">Descripcion</label>
    <input type="text" class="forma-form__input" name="descripcion" id="descripcion" placeholder="Nombre departamento" value="{{old('descripcion')}}" required>

        @if($errors->has('descripcion'))
            <span class="help-block">
                <strong>{{$errors->first('descripcion')}}</strong>
            </span>
        @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group{{$errors->has('description') ? 'has-error' : ''}}">

  <label class="forma-form__label" for="lista">Pais:</label>
  <select class="forma-form__input" name="lista" id="lista"  value="{{old('lista')}}" required>
        <option Default="">Seleccione un pais</option>
        @foreach($pais as $paises)
            <option value = "{{$paises -> id}}"> {{$paises -> nompais}} </option>
        @endforeach
  </select>
      @if($errors->has('lista'))
          <span class="help-block">
              <strong>{{$errors->first('lista')}}</strong>
          </span>
      @endif


</div>
