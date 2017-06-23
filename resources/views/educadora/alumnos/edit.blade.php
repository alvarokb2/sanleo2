@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Alumno
            <a href="{{ route('alumno.index') }}" class="btn btn-default pull-right">Ir a lista de alumnos
            </a>
        </h2>
        {!! Form::model($alumno, ['route' => ['alumno.update', $alumno->id], 'method' => 'PUT']) !!}

        @include('educadora.partials.editar_alumno')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">
    </div>
@endsection
