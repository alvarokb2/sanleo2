@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Indicador
            
        </h2>
        {!! Form::model($indicador, ['route' => ['indicador.update', $indicador->id], 'method' => 'PUT']) !!}

        @include('admin.partials.editar_indicador')

        {!! Form::close() !!}

    </div>
    <div class="col-xs-12 col-sm-4">
    </div>
@endsection
