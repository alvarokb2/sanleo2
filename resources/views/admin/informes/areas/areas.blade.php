@extends('admin.index')

@section('contenido')

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('partials.lista_areas')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('area.create')}}">Nuevo</a>
    </div>

@endsection