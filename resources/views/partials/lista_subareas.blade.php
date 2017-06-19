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
                        Acciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($subareas as $subarea)
                    <tr>
                        <td>
                            {{$subarea->name}}
                        </td>
                        <td>
                            <a href="{{route('subarea.show', $subarea->id)}}" class="btn btn-default">Ver Indicadores</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['subarea.destroy', $subarea->id]]) !!}
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