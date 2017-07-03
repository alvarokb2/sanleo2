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
                @if(session()->get('alumno')->hasResult(session()->get('subarea')))
                    @php $resultado = session()->get('alumno')->getResult(session()->get('subarea'))
                    @endphp
                    {!! Form::model($resultado ,['route' => ['resultado.update', $resultado->id], 'method' => 'PUT']) !!}
                @else
                    {!! Form::open(['route' => ['resultado.store'], 'method' => 'POST']) !!}
                @endif


                @php $i = 1;
                @endphp

                @foreach($indicadores as $indicador)
                    <tr>
                        <td>
                            {{$indicador->name}}
                        </td>
                        <td>
                            <input type="radio" id="seleccion" name="seleccion" value="{{$i}}"  {{ old('radio.1')==$i ? 'checked='.'"'.'checked'.'"' : '' }} />                        </td>

                    </tr>
                    @php $i = $i +1;
                    @endphp                @endforeach
                </tbody>

            </table>
            <div class="form-group">
              <label for="comment">Observacón:</label>
              <textarea class="form-control" rows="5" id="comment" name="observacion"></textarea>
            </div>


        @include('educadora.partials.guardar_seleccion')
        {!! Form::close() !!}

        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
