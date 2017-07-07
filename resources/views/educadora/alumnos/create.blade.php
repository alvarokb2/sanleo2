@extends('educadora.index')

@section('contenido')

 @include('educadora.partials.error')
    {!! Form::open(['route' => 'alumno.store']) !!}
    @include('educadora.partials.nuevo_alumno')
    {!! Form::close() !!}
@endsection
