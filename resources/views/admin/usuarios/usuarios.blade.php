@extends('admin.index')

@section('contenido')

    @include('partials.lista_usuarios')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('user.create')}}">Nuevo</a>
    </div>

@endsection
