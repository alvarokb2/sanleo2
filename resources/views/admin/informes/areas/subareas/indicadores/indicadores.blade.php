@extends('admin.index')

@section('contenido')

<center><h3>Indicadores</h3></center>

    @include('partials.lista_indicadores')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('indicador.create')}}">Nuevo</a>
    </div>


@endsection
