@extends('layouts.app')

@section('content')
    @include('apoderado.partials.menu')

    @if(session()->has('alumno'))
    {{ session()->get('alumno')->name }}
    @endif
    
    @yield('contenido')
@endsection
