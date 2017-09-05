@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Área

        </h2>
        {!! Form::model($area, ['route' => ['area.update', $area->id], 'method' => 'PUT']) !!}

        @include('admin.partials.editar_area')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">
    </div>
@endsection
