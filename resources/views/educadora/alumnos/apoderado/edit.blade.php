@extends('admin.index')

@section('contenido')
    {!! Form::model($user, ['route' => ['user.update', $user->id]]) !!}
    @include('admin.partials.editar_usuario')
    {!! Form::close() !!}
@endsection