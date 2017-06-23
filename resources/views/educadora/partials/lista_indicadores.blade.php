<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>

                    <th>
                        Nombre
                    </th>
                    <th>
                        Selección
                    </th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1;
                @endphp
                @foreach($indicadores as $indicador)
                    <tr>
                        <td>
                            {{$indicador->name}}
                        </td>
                        <td>
                            {!! Form::checkbox($indicador->name, $i) !!}
                        </td>

                    </tr>
                    @php $i = $i +1;
                    @endphp                @endforeach
                </tbody>
                <div class="form-group">
                  <label for="comment">Observacón:</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </table>

        {!! Form::model($indicadores, ['route' => ['resultados.update', $indicador->id], 'method' => 'PUT']) !!}

        @include('educadora.partials.guardar_seleccion')
        {!! Form::close() !!}

        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
