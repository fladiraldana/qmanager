

<div class="form-group {{$errors->has('base') ? 'has-error' : ''}}">
  <label for="base">Base</label>
  <select class="formcontrol" id="base" name="base" value="{{old('base')}}" required>

      <option selected='selected'>Selecione una base</option>
    @foreach($base as $bases)
        <option value="{{$bases->id}}">{{$bases->nombase}}</option>
    @endforeach
  </select>

  @if($errors->has('base'))
      <span class="help-block">
          <strong>{{$errors->first('base')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('cantemp') ? 'has-error' : ''}}">
  <label for="cantemp">Cantidad empleados</label>
  <input type="text" class="formcontrol" id="cantemp" name="cantemp" placeholder="Cantidad" value="{{old('cantemp')}}" required>

  @if($errors->has('cantemp'))
      <span class="help-block">
          <strong>{{$errors->first('cantemp')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('analista') ? 'has-error' : ''}}">
  <label for="base">Analista</label>
  <select class="formcontrol" id="analista" name="analista" value="{{old('analista')}}" required>

    <option selected='selected'>Selecione un Analista</option>

    <option value=""></option>

  </select>

  @if($errors->has('analista'))
      <span class="help-block">
          <strong>{{$errors->first('analista')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('feccorte') ? 'has-error' : ''}}">
  <label for="feccorte">Fecha de corte</label>
  <input type="text" class="formcontrol" id="feccorte" name="feccorte" placeholder="Fecha de corte" value="{{old('feccorte')}}" required>

  @if($errors->has('feccorte'))
      <span class="help-block">
          <strong>{{$errors->first('feccorte')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('fecrecep') ? 'has-error' : ''}}">
  <label for="fecrecep">Fecha recepcion</label>
  <input type="text" class="formcontrol" id="fecrecep" name="fecrecep" placeholder="Fecha recepcion" value="{{old('fecrecep')}}" required>

  @if($errors->has('fecrecep'))
      <span class="help-block">
          <strong>{{$errors->first('fecrecep')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('horrecep') ? 'has-error' : ''}}">
  <label for="horrecep">Hora recepcion</label>
  <input type="text" class="formcontrol" id="horrecep" name="horrecep" placeholder="Hora recepcion" value="{{old('horrecep')}}" required>

  @if($errors->has('horrecep'))
      <span class="help-block">
          <strong>{{$errors->first('horrecep')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('fecvalid') ? 'has-error' : ''}}">
  <label for="fecvalid">Fecha de validacion</label>
  <input type="text" class="formcontrol" id="fecvalid" name="fecvalid" placeholder="Fecha de validacion" value="{{old('fecvalid')}}" required>

  @if($errors->has('fecvalid'))
      <span class="help-block">
          <strong>{{$errors->first('fecvalid')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('horvalid') ? 'has-error' : ''}}">
  <label for="horvalid">Hora validacion</label>
  <input type="text" class="formcontrol" id="horvalid" name="horvalid" placeholder="Hora validacion" value="{{old('horvalid')}}" required>

  @if($errors->has('horvalid'))
      <span class="help-block">
          <strong>{{$errors->first('horvalid')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('fecentrega') ? 'has-error' : ''}}">
  <label for="fecentrega">Fecha de entrega</label>
  <input type="date" class="formcontrol" id="fecentrega" name="fecentrega" placeholder="Fecha de entrega" value="{{old('fecentrega')}}" required>

  @if($errors->has('fecentrega'))
      <span class="help-block">
          <strong>{{$errors->first('fecentrega')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('horentrega') ? 'has-error' : ''}}">
  <label for="horentrega">Hora de entrega</label>
  <input type="text" class="formcontrol" id="horentrega" name="horentrega" placeholder="Hora de entrega" value="{{old('horentrega')}}" required>

  @if($errors->has('horentrega'))
      <span class="help-block">
          <strong>{{$errors->first('horentrega')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('proceso') ? 'has-error' : ''}}">
  <label for="proceso">Proceso</label>
  <select class="formcontrol" id="proceso" name="proceso" value="{{old('proceso')}}" required>


    @foreach($proceso as $procesos)
        <option selected='selected'>Selecione proceso</option>
        <option value="{{$procesos->id}}">{{$procesos -> nomproceso}}</option>
    @endforeach

  </select>

  @if($errors->has('proceso'))
      <span class="help-block">
          <strong>{{$errors->first('proceso')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('ordenrev') ? 'has-error' : ''}}">
  <label for="ordenrev">Orden de validacion</label>
  <input type="text" class="formcontrol" id="ordenrev" name="ordenrev" placeholder="Orden de validacion" value="{{old('ordenrev')}}" required>

  @if($errors->has('ordenrev'))
      <span class="help-block">
          <strong>{{$errors->first('ordenrev')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('controller') ? 'has-error' : ''}}">
  <label for="controller">Controller</label>
  <select class="formcontrol" id="controller" name="controller" value="{{old('controller')}}" required>

    <option value=""></option>

  </select>

  @if($errors->has('controller'))
      <span class="help-block">
          <strong>{{$errors->first('controller')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('observacion') ? 'has-error' : ''}}">
  <label for="observacion">Observacion</label>
  <input type="text" class="formcontrol" id="observacion" name="observacion" placeholder="Observacion" value="{{old('observacion')}}" required>

  @if($errors->has('observacion'))
      <span class="help-block">
          <strong>{{$errors->first('observacion')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('conterror') ? 'has-error' : ''}}">
  <label for="conterror">Contiene Error</label>
  <input type="checkbox" class="formcontrol" id="conterror" name="conterror"  value="{{old('conterror')}}" required>

  @if($errors->has('conterror'))
      <span class="help-block">
          <strong>{{$errors->first('conterror')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->


<div class="form-group {{$errors->has('aprov') ? 'has-error' : ''}}">
  <label for="aprov">Aprobado</label>
  <input type="checkbox" class="formcontrol" id="aprov" name="aprov"  value="{{old('aprov')}}" required>

  @if($errors->has('aprov'))
      <span class="help-block">
          <strong>{{$errors->first('aprov')}}</strong>
      </span>
  @endif

</div>
<!--___________________________________________________________________________________________-->

<div class="form-group {{$errors->has('observaciones') ? 'has-error' : ''}}">
  <label for="observaciones">Observaciones</label>
  <input type="text" class="formcontrol" id="observaciones" name="observaciones"  value="{{old('observaciones')}}" required>

  @if($errors->has('conterror'))
      <span class="help-block">
          <strong>{{$errors->first('conterror')}}</strong>
      </span>
  @endif

</div>

<!--___________________________________________________________________________________________-->
<div class="form-group {{$errors->has('erroresdec') ? 'has-error' : ''}}">
  <label for="erroresdec">Errores del proceso</label>
  <select multiple class="formcontrol" id="erroresdec" name="erroresdec" value="{{old('erroresdec')}}" required>


    @foreach($proceso as $procesos)
        <option selected='selected'>Selecione proceso</option>
        <option value="{{$procesos->id}}">{{$procesos -> nomproceso}}</option>
    @endforeach

  </select>

  @if($errors->has('proceso'))
      <span class="help-block">
          <strong>{{$errors->first('proceso')}}</strong>
      </span>
  @endif

</div>
