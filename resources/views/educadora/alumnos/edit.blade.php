@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Alumno
            <a href="{{ route('curso.show') }}" class="btn btn-default pull-right">Ir a lista de alumnos
            </a>
        </h2>
        {!! Form::model($curso, ['route' => ['curso.update', $curso->id], 'method' => 'PUT']) !!}

        @include('admin.partials.editar_curso')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">
    </div>
@endsection
