@extends('admin.index')

@section('contenido')
<center><h3>Editar educadora</h3></center>


    {!! Form::model($user, ['route' => ['user.update', $user->id]]) !!}
    @include('admin.partials.editar_usuario')
    {!! Form::close() !!}


@endsection
