@extends('admin.index')

@section('contenido')
    {!! Form::open(['route' => 'informe.store']) !!}
    @include('admin.partials.nuevo_informe')
    {!! Form::close() !!}
@endsection