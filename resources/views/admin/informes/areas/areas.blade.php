@extends('admin.index')

@section('contenido')

    @include('partials.lista_areas')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('area.create')}}">Nuevo</a>
    </div>

    <div align="center">
      <input  type="button"  onclick="history.back()" value="Volver">
    </div>


@endsection
