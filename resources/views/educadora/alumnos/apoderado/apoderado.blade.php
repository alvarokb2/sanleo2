@extends('educadora.index')

@section('contenido')

    @include('educadora.partials.lista_usuarios')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('user.create')}}">Nuevo</a>
    </div>

@endsection
