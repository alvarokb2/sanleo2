@extends('educadora.index')

@section('contenido')
    {!! Form::model($user, ['route' => ['user.update', $user->id]]) !!}
    @include('educadora.partials.editar_usuario')
    {!! Form::close() !!}
@endsection
