<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <table class="table">
                <thead>
                <tr>

                    <th>
                        Nombre
                    </th>
                    <th>
                        Fecha de nacimiento
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
                            <a href="{{route('.....', $alumno->id)}}"class="btn btn-primary">Ver Informes</a>
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
