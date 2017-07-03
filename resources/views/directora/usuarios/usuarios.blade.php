@extends('directora.index')

@section('contenido')

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('directora.partials.lista_usuarios')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('user.create')}}">Nuevo</a>
    </div>

@endsection
