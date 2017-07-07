@extends('admin.index')

@section('contenido')

<center><h3>Sub áreas</h3></center>


    @include('partials.lista_subareas')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('subarea.create')}}">Nuevo</a>
    </div>


@endsection
