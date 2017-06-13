@extends('admin.index')

@section('contenido')
    {!! Form::open(['route' => 'user.store']) !!}
    @include('admin.partials.nuevo_usuario')
    {!! Form::close() !!}
@endsection