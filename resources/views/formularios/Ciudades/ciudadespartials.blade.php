


    <label for="codigo" class="forma-form__label">Codigo</label>
      <input type="text" required class="forma-form__input" name="codigo" id="codigo" placeholder="Codigo DIAN de la ciudad" value="{{old('codigo')}}">

        @if($errors->has('codigo'))
            <span class="help-block">
                  <strong>{{$errors->first('codigo')}}</strong>
             </span>
        @endif

    <label for="descripcion" class="forma-form__label">Descripcion</label>
    <input type="text" required class="forma-form__input" name="descripcion" id="descripcion" placeholder="Nombre de la ciudad" value="{{old('descripcion')}}">

        @if($errors->has('descripcion'))
            <span class="help-block">
                <strong>{{$errors->first('descripcion')}}</strong>
            </span>
        @endif

  <label for="lista" class="forma-form__label">Departamento:</label>
  <select class="forma-form__input" name="lista" id="lista" required value="{{old('lista')}}">
        <option Default="">Seleccione un departamento</option>
        @foreach($departamento as $departamentos)
            <option value = "{{$departamentos -> id}}"> {{$departamentos -> nomdepart}} </option>
        @endforeach
  </select>
      @if($errors->has('lista'))
          <span class="help-block">
              <strong>{{$errors->first('lista')}}</strong>
          </span>
      @endif
