{{method_field('PUT')}}
{{ csrf_field() }}
{{Form::hidden('id', $user->id)}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

    <label for="name" class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>

    <label for="email" class="col-md-4 control-label">Email</label>

    <div class="col-md-6">
        <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>

</div>

<div class="form-group">

    <label for="rol" class="col-md-4 control-label">Rol</label>
    <div class="col-md-6">
      <Input readonly type="text" class="form-control" name="rol" value="Educadora">
    </div>
</div>

</br>
</br>
</br>
</br>
<div class="form-group">

    <div class="col-md-9">
      <a href="{{ route('home') }}" class="btn btn-default ">Restablecer contraseña</a>
    </div>
    <div class="col-md-3">
        {!! Form::submit('Guardar') !!}
    </div>

</div>
