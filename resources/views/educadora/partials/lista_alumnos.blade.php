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
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>
                            {{$alumno->name}}
                        </td>

                        <td>
                          <a href="{{route('alumno.edit', $alumno->id)}}"class="btn btn-primary">Editar Alumno</a>
                        </td>
                          <td>
                            <a href="{{route('alumno.show', $alumno->id)}}"class="btn btn-primary">Contestar Informe</a>
                        </td>
                        <td>
                            @if($alumno->hasApoderado())
                                <a href="{{route('user.edit', $alumno->id)}}">Editar Apoderado</a>
                            @else
                                {{session()->put('alumno', $alumno)}}
                                <a href="{{route('user.create')}}">Agregar Apoderado</a>
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['alumno.destroy', $alumno->id]]) !!}
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
