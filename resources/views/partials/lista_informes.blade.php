<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
             <table class="table table-condensed table-bordered">
                <thead>
                <tr>
                  <th>
                      Activar
                  </th>
                    <th>
                        Año
                    </th>
                    <th>
                        Periodo
                    </th>
                    <th>
                        Acciones
                    </th>


                </tr>
                </thead>
                <tbody>

                @foreach($informes as $informe)
                    <tr>
                      <td>
                        @if ($informe->activo)
                          <a href=""class="btn btn-primary">Activar</a>
                        @else
                          <a href="{{route('activar_informe', $informe->id)}}" class="btn btn-default">Activar</a>
                          @endif
                      </td>

                        <td>
                            {{$informe->year}}
                        </td>
                        <td>
                            {{$informe->periodo}}
                        </td>
                        <td>
                          <a href="{{route('informe.edit', $informe->id)}}"class="btn btn-primary">Editar</a>
                      </td>
                        <td>
                            <a href="{{route('informe.show', $informe->id)}}" class="btn btn-default">Ver áreas</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('copiar_informe', $informe->id)}}">Copiar informe</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['informe.destroy', $informe->id]]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                </tr>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
