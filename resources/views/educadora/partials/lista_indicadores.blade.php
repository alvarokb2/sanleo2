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
                @foreach($indicadores as $indicador)
                    <tr>
                        <td>
                            {{$indicador->name}}
                        </td>

                    </tr>
                @endforeach
                </tbody>
                <div class="form-group">
                  <label for="comment">Observacón:</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>