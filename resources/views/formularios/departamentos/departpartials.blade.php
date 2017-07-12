

<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo">Codigo</label>
    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo DIAN del departamento" value="{{old('codigo')}}">

        @if($errors->has('codigo'))
            <span class="help-block">
                  <strong>{{$errors -> first('codigo')}}</strong>
             </span>
        @endif
</div>

<div class="form-group{{$errors->has('descripcion') ? 'has-error' : ''}}">

    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Nombre departamento" value="{{old('descripcion')}}">

        @if($errors->has('descripcion'))
            <span class="help-block">
                <strong>{{$errors->first('descripcion')}}</strong>
            </span>
        @endif

</div>

<div class="form-group{{$errors->has('description') ? 'has-error' : ''}}">

  <label for="lista">Pais:</label>
  <select class="lista" name="lista" id="lista" required value="{{old('lista')}}">
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
