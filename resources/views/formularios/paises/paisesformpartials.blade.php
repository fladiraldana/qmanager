

<div class="form-group{{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo">Codigo</label>
    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo DIAN del pais" value="{{old('codigo')}}">

        @if($errors->has('codigo'))
            <span class="help-block">
                            <strong>{{$errors -> first('codigo')}}</strong>
             </span>
        @endif
</div>

<div class="form-group{{$errors->has('descripcion') ? 'has-error' : ''}}">

    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Pais" value="{{old('descripcion')}}">

        @if($errors->has('descripcion'))
            <span class="help-block">
                            <strong>{{$errors->first('descripcion')}}</strong>
            </span>
        @endif

</div>