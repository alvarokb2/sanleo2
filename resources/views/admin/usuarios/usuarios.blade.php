@extends('admin.index')

@section('contenido')

<center><h3>Educadoras</h3></center>

    @include('partials.lista_usuarios')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('user.create')}}">Nuevo</a>
    </div>
    
@endsection
