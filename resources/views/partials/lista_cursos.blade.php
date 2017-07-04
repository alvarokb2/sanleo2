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
                @foreach($cursos as $curso)
                <tr>
                    <td>
                        {{$curso->name}}
                    </td>
                    <td>
                        <a href="{{route('curso.show', $curso->id)}}" class="btn btn-default">Ver Alumnos</a>
                    </td>
                    <td>
                        <a href="{{route('curso.edit', $curso->id)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['curso.destroy', $curso->id]]) !!}
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
