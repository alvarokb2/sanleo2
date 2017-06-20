@extends('admin.index')

@section('contenido')
    {!! Form::open(['route' => 'indicador.store']) !!}
    @include('admin.partials.nueva_subarea')
    {!! Form::close() !!}
@endsection