@extends('admin.index')

@section('contenido')
    {!! Form::open(['route' => 'area.store']) !!}
    @include('admin.partials.nueva_area')
    {!! Form::close() !!}
@endsection