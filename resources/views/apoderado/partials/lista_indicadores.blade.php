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
                            {!! Form::radio('seleccion', $i) !!}
                        </td>

                    </tr>
                    @php $i = $i +1;
                    @endphp                @endforeach
                </tbody>

            </table>
            <div class="form-group">
              <label for="comment">Observacón:</label>
              <textarea class="form-control" rows="5" id="comment" name="observacion" spellcheck="true"></textarea>
            </div>

        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
