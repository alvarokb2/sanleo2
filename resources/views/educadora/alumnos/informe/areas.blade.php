@extends('educadora.index')

@section('contenido')

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('educadora.partials.lista_areas')


@endsection
