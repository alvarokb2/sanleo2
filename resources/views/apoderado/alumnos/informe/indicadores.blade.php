@extends('apoderado.index')

@section('contenido')

    @include('apoderado.partials.lista_indicadores')

    <div align="center">
      <input  type="button"  onclick="history.back()" value="Volver">
    </div>


@endsection
