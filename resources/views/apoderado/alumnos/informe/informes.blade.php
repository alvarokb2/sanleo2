@extends('apoderado.index')

@section('contenido')

    @include('apoderado.partials.lista_informes')

    <center>
        <a href="{{route('user.index')}}"><button class="btn btn-primary" onclick="history.back()" >Regresar</button></a>
    </center>


@endsection

