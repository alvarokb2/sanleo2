@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <h2>
                <strong>{{ $areas->name}}</strong>
                <a href="{{ route('areas.index') }}" class="btn btn-default pull-right">		Regresar
                </a>
            </h2>


        </div>

@endsection