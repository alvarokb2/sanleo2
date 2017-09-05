@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Subárea

        </h2>
        {!! Form::model($subarea, ['route' => ['subarea.update', $subarea->id], 'method' => 'PUT']) !!}

        @include('admin.partials.editar_subarea')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">
    </div>
@endsection
