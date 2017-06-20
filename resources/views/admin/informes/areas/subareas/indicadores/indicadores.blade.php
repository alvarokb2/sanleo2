@extends('admin.index')

@section('contenido')

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('partials.lista_indicadores')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('indicador.create')}}">Nuevo</a>
    </div>

@endsection