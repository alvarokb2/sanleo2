@extends('educadora.index')

@section('contenido')

<center><h3>Lista de Alumnos</h3></center>

<div class="container-fluid">
    @if(Auth::user()->rol == 'educadora')
        <a href="{{route('alumno.create')}}"><span class="glyphicon glyphicon-list-alt">Nuevo</span></a>
    @endif
</div>
    @include('educadora.partials.lista_alumnos')

    <center>
        <a href="{{route('curso.index')}}"><button class="btn btn-primary">Regresar</button></a>
    </center>

@endsection
