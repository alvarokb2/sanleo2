@extends('directora.index')

@section('contenido')
    {!! Form::open(['route' => 'user.store']) !!}
    @include('directora.partials.nuevo_usuario')
    {!! Form::close() !!}
@endsection
