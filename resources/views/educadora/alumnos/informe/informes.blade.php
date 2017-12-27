@extends('educadora.index')

@section('contenido')

    @include('educadora.partials.lista_informes')

    <center>
        <a href="{{route('alumno.index')}}"><button class="btn btn-primary" onclick="history.back()" >Regresar</button></a>
    </center>


@endsection

