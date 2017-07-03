@extends('admin.index')

@section('contenido')

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('partials.lista_subareas')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('subarea.create')}}">Nuevo</a>
    </div>
    <div align="center">
      <input  type="button"  onclick="history.back()" value="Volver">
    </div>


@endsection
