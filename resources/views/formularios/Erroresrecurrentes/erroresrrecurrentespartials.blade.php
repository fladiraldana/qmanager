
  <label for="codigo" class="forma-form__label">Codigo:</label>
  <input type="text" class="forma-form__input" id="codigo" name="codigo" placeholder="" value="{{old('codigo')}}" disabled>

  @if($errors->has('codigo'))
      <span class="help-block">
          <strong>{{$errors->first('codigo')}}</strong>
      </span>
  @endif

<!--___________________________________________________________________________________________-->


  <label for="errortip" class="forma-form__label">Error:</label>
  <input type="text" class="forma-form__input" id="errortip" name="errortip" placeholder="" value="{{old('errortip')}}" required onchange="mayus()">

  @if($errors->has('errortip'))
      <span class="help-block">
          <strong>{{$errors->first('errortip')}}</strong>
      </span>
  @endif

<!--___________________________________________________________________________________________-->

<label for="proceso" class="forma-form__label">Proceso:</label>
<select class="forma-form__input" name="proceso" id="proceso" required>
  <option value="">seleccione un proceso</option>
  @foreach($proceso as $procesos)
    <option value="{{$procesos -> id}}">{{$procesos -> nomproceso}}</option>
  @endforeach
</select>

@if($errors->has('errortip'))
    <span class="help-block">
        <strong>{{$errors->first('errortip')}}</strong>
    </span>
@endif
