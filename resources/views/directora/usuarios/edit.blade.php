@extends('directora.index')

@section('contenido')
    {!! Form::model($user, ['route' => ['user.update', $user->id]]) !!}
    @include('directora.partials.editar_usuario')
    {!! Form::close() !!}
@endsection
