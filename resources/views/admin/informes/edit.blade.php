@extends('admin.index')

@section('contenido')
    {!! Form::model($informe, ['route' => ['informe.update', $informe->id], 'method' => 'PUT']) !!}
    @include('admin.partials.editar_informe')
    {!! Form::close() !!}
@endsection