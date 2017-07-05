@extends('educadora.index')

@section('contenido')
    {!! Form::model($apoderado, ['route' => ['user.update', $apoderado->id]]) !!}
    @include('educadora.partials.editar_usuario')
    {!! Form::close() !!}

    {{ session()->put('apoderado', $apoderado) }}
    <a href="{{route('restablecer_pass')}}" class="btn btn-default">Restablecer contraseña</a>
@endsection
