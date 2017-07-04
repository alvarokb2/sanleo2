@extends('educadora.index')

@section('contenido')

<div class="container-fluid">
    @if(Auth::user()->rol == 'educadora')
        <a href="{{route('alumno.create')}}"><span class="glyphicon glyphicon-list-alt">Nuevo</span></a>
    @endif
</div>
    @include('educadora.partials.lista_alumnos')


@endsection
