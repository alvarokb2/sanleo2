@extends('educadora.index')

@section('contenido')
    @include('educadora.partials.lista_alumnos')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('alumno.create')}}">Nuevo</a>
    </div>
@endsection
