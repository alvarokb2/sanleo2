@extends('admin.index')

@section('contenido')


    @include('partials.lista_subareas')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('subarea.create')}}">Nuevo</a>
    </div>


@endsection
