@extends('admin.index')

@section('contenido')

    @include('partials.lista_cursos')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('curso.create')}}">Nuevo</a>
    </div>


@endsection
