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
                @foreach($areas as $area)
                    <tr>
                        <td>
                            {{$area->name}}
                        </td>
                        <td>
                          <a href="{{route('area.edit', $area->id)}}"class="btn btn-primary">Editar</a>
                      </td>
                        <td>
                            <a href="{{route('area.show', $area->id)}}" class="btn btn-default">Ver Sub Áreas</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['area.destroy', $area->id]]) !!}
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
