<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-11">
            <table class="table table-condensed  table-bordered">
                <thead>
                <tr>

                    <th>
                        Nombre
                    </th>
                    <th>
                        Fecha nacimiento
                    </th>

                    <th>
                        Acciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>
                            {{$alumno->name}}
                        </td>
                        <td>
                            {{$alumno->fecha_nacimiento}}
                        </td>

                        <td>
                            <a href="{{route('alumno.edit', $alumno->id)}}" class="btn btn-primary">Editar Alumno</a>
                        </td>
                        <td>
                          @if(Auth::user()->rol == 'educadora')
                            <a href="{{route('alumno.show', $alumno->id)}}" class="btn btn-primary">Contestar
                                Informe</a>
                        </td>
                        <td>
                            @if($alumno->hasApoderado())
                                {{session()->put('apoderado', $alumno->apoderado()->first())}}
                                <a href="{{route('user.edit', $alumno->apoderado()->first()->id)}}">Editar Apoderado</a>
                            @else
                                <a href="{{route('add_apoderado', $alumno)}}">Agregar Apoderado</a>
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['alumno.destroy', $alumno->id]]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                          @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $alumnos->render() !!}
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
