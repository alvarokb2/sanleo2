@extends('admin.index')

@section('contenido')
<center><h3>Lista de Áreas</h3></center>


    @include('partials.lista_areas')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('area.create')}}">Nuevo</a>
    </div>

    <center>
        <a href="{{route('informe.index')}}"><button class="btn btn-primary">Regresar</button></a>
    </center>


@endsection
