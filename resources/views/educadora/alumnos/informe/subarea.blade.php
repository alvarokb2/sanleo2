@extends('educadora.index')

@section('contenido')

<center><h3>Sub áreas</h3></center>


    @include('educadora.partials.lista_subareas')

    <center>
        <a href="{{route('area.index')}}"><button class="btn btn-primary">Regresar</button></a>
    </center>
@endsection
