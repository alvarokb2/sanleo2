@extends('admin.index')

@section('contenido')
<center><h3>Lista de Informes</h3></center>


    @include('partials.lista_informes')

<center>
    <a href="{{route('user.index')}}"><button class="btn btn-primary" onclick="history.back()" >Regresar</button></a>
</center>


@endsection
