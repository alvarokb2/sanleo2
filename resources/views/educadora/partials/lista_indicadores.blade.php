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

                        @if(session()->get('alumno')->hasResult(session()->get('subarea')))
                            <td>
                                <input type="radio" id="seleccion" name="seleccion" value="{{$i}}"  {{ $resultado->seleccion == $i ? 'checked' : '' }} />
                            </td>
                        @else
                            <td>
                                <input type="radio" id="seleccion" name="seleccion" value="{{$i}}" />
                            </td>
                        @endif


                    </tr>
                    @php $i = $i +1;

                    @endphp
                @endforeach

                </tbody>

            </table>
            <div class="form-group">
              <label for="comment">Observacón:</label>

                @if(session()->get('alumno')->hasResult(session()->get('subarea')))
                    <textarea class="form-control" rows="5" id="comment" name="observacion" spellcheck="true">{{ $resultado->observacion }}</textarea>
                @else
                    <textarea class="form-control" rows="5" id="comment" name="observacion" spellcheck="true"></textarea>
                @endif

            </div>

        @include('educadora.partials.guardar_seleccion')
        {!! Form::close() !!}

        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
