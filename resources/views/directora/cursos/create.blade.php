@extends('directora.index')

@section('contenido')
    {!! Form::open(['route' => 'curso.store']) !!}
    @include('admin.partials.nuevo_curso')
    {!! Form::close() !!}
@endsection
