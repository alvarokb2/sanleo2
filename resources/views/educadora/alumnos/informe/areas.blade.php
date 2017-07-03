@extends('educadora.index')

@section('contenido')


    @include('educadora.partials.lista_area')

    <div align="center">
      <input  type="button"  onclick="history.back()" value="Volver">
    </div>
@endsection
