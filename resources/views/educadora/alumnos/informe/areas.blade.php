@extends('educadora.index')

@section('contenido')

    {!! Form::open() !!}
    @include('partials.buscar')
    {!! Form::close() !!}

    @include('educadora.partials.lista_area')

    <div align="center">
      <input  type="button"  onclick="history.back()" value="Volver">
    </div>
@endsection
