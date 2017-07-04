@extends('layouts.app')

@section('content')
    @if(Auth::user()->rol == 'admin')
        @include('admin.partials.menu')
    @elseif(Auth::user()->rol == 'educadora')
        @include('educadora.partials.menu')
    @endif
    @yield('contenido')
@endsection
