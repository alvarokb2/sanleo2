@extends('educadora.index')

@section('contenido')
    {!! Form::open(['route' => 'user.store']) !!}
    @include('educadora.partials.nuevo_usuario')
    {!! Form::close() !!}
@endsection
