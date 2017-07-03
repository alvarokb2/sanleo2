@extends('educadora.index')

@section('contenido')

<div class="container-fluid">
<a href="{{route('alumno.create')}}"><span class="glyphicon glyphicon-list-alt">Nuevo</span></a>
</div>
    @include('educadora.partials.lista_alumnos')

    <div align="center">
      <input  type="button"  onclick="history.back()" value="Volver">
    </div>

@endsection
