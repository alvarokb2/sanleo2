{{method_field('PUT')}}
{{ csrf_field() }}
{{Form::hidden('id', $apoderado->id)}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ $apoderado->name }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group">

    <label for="rol" class="col-md-4 control-label">Rol</label>
    <div class="col-md-6">

        <Input readonly type="text" class="form-control" name="rol" value="Apoderado">
      
    </div>
</div>

<div class="form-group">
    <div class="col-md-7">
    </div>

    <div class="col-md-2">
        {!! Form::submit('Guardar') !!}
    </div>
    <div class="col-md-2">

    </div>

</div>
