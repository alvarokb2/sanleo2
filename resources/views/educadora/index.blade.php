@extends('layouts.app')

@section('content')
    @if(Auth::user()->rol == 'admin')
        @include('admin.partials.menu')
    @elseif(Auth::user()->rol == 'educadora')
        @include('educadora.partials.menu')
    @endif

    @if(session()->has('alumno'))
    {{ session()->get('alumno')->name }}
    @endif

    @yield('contenido')
@endsection
