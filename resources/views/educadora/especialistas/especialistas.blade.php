@extends('educadora.index')

@section('contenido')

<center><h3>Lista de educadoras</h3></center>

    @include('educadora.partials.lista_educadoras')

    <center>
        <a href="{{route('curso.index')}}"><button class="btn btn-primary">Regresar</button></a>
    </center>

@endsection
