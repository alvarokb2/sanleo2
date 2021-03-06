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
                        Acciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($indicadores as $indicador)
                    <tr>
                        <td>
                            {{$indicador->name}}
                        </td>
                        <td>
                          <a href="{{route('indicador.edit', $indicador->id)}}"class="btn btn-primary">Editar</a>
                      </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['indicador.destroy', $indicador->id]]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>

        <div class="col-md-2">
        </div>
    </div>
</div>
