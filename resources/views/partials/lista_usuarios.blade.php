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
                @foreach($usuarios as $usuario)
                @if($usuario->rol == 'educadora')
                    <tr>
                        <td>
                            {{$usuario->name}}
                        </td>
                        <td>
                            <a href="{{route('user.edit', $usuario->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $usuario->id]]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td>

                                <a href="{{route('user.show', $usuario->id)}}">Ver Cursos</a>
                            @endif
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
