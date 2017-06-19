<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Informe</div>
                <div class="panel-body">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="col-md-4 control-label">Año</label>

                        <div class="col-md-6">
                            <input id="year" type="text" class="form-control" name="year" value="{{ old('year') }}" required autofocus>

                            @if ($errors->has('year'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('periodo') ? ' has-error' : '' }}">
                        <label for="periodo" class="col-md-4 control-label">Periodo</label>

                        <div class="col-md-6">
                            <input id="periodo" type="text" class="form-control" name="periodo" value="{{ old('periodo') }}" required autofocus>

                            @if ($errors->has('periodo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('periodo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Guardar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>