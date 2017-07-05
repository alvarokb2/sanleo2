<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <table class="table table-condensed  table-bordered">
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
                @endif
                @foreach($indicadores as $indicador)
                    <tr>
                        <td>
                            {{$indicador->name}}
                        </td>
                        <td>
                            <input type="radio" id="seleccion" name="seleccion"
                                   value="{{$indicador->id}}" {{ (isset($resultado) && $resultado->seleccion == $indicador->id) ? 'checked' : 'disabled'}} />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <label for="comment">Observacón:</label>
                    <textarea class="form-control" readonly rows="5" id="comment" name="observacion"
                              spellcheck="true">{{ isset($resultado) ? $resultado->observacion : 'disabled'}}</textarea>
            </div>

        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
