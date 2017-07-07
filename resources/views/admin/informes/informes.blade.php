@extends('admin.index')

@section('contenido')
<center><h3>Lista de Informes</h3></center>


    @include('partials.lista_informes')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('informe.create')}}">Nuevo</a>
    </div>

@endsection
