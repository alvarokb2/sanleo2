@extends('admin.index')

@section('contenido')

  <center><h3>Cursos</h3></center>


    @include('partials.lista_cursos')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('curso.create')}}">Nuevo</a>
    </div>
<center>
    <a href="{{route('user.index')}}"><button class="btn btn-primary">Regresar</button></a>
</center>
@endsection
