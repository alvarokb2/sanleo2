@extends('admin.index')

@section('contenido')
    {!! Form::open(['route' => 'subarea.store']) !!}
    @include('admin.partials.nueva_subarea')
    {!! Form::close() !!}
@endsection