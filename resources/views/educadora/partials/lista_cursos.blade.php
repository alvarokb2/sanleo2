<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
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
                            <a href="{{route('curso.show', $curso->id)}}">Ver alumnos</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('user.index') }}" class="btn btn-default pull-right">Agregar colaborador</a>

        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
