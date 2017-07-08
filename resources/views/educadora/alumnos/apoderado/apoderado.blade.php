@extends('educadora.index')

@section('contenido')

<div class="container-fluid">
    <a class="btn btn-primary" href="{{route('user.create')}}">Nuevo</a>
</div>

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('educadora.partials.lista_usuarios')



@endsection
