@extends('educadora.index')

@section('contenido')

<center><h3>Areas</h3></center>


    @include('educadora.partials.lista_area')

    
    <center>
        <a href="{{route('alumno.index')}}"><button class="btn btn-primary">Regresar</button></a>
    </center>

@endsection
