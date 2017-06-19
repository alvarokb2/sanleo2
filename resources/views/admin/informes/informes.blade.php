@extends('admin.index')

@section('contenido')

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('partials.lista_informes')

    <div class="container-fluid">
        <a class="btn btn-primary" href="{{route('informe.create')}}">Nuevo</a>
    </div>

@endsection