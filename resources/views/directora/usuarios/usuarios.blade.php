@extends('directora.index')

@section('contenido')

    @include('directora.partials.lista_usuarios')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('user.create')}}">Nuevo</a>
    </div>

@endsection
