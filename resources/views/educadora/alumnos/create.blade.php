@extends('educadora.index')

@section('contenido')
    {!! Form::open(['route' => 'alumno.store']) !!}
    @include('educadora.partials.nuevo_alumno')
    {!! Form::close() !!}
@endsection
