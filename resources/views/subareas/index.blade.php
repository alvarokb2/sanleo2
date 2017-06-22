@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <h2>
                Sub Areas
                <a href="{{ route('subareas.create') }}" class="btn btn-primary pull-right">Nueva</a>

            </h2>

                <tbody>
                @foreach($subareas as $subarea)
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Subarea 1
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                <select class="custom-select">
                                    <option selected>Selecciona indicador</option>
                                    <option value="1">blablablabla</option>
                                    <option value="2">bleblebleble</option>
                                    <option value="3">blibliblibli</option>
                                </select>
                                <div class="form-group">
                                    {!! Form::label('observacion', 'Observacion') !!}
                                    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
                </tbody>

        </div>

@endsection