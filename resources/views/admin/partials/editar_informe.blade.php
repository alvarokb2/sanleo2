<div class="form-group">
    {!! Form::label('year', 'Año') !!}
    {!! Form::text('year', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('periodo', 'Periodo') !!}
    {!! Form::text('periodo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>