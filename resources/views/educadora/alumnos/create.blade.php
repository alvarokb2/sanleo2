@extends('educadora.index')

@section('contenido')
    {!! Form::open(['route' => 'alumno.store']) !!}
    @include('admin.partials.nuevo_alumno')
    {!! Form::close() !!}
@endsection
