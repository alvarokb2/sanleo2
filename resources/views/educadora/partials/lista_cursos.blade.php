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
                    <th></th>
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
                        <td>
                            <a href="{{ route('add_educadora', $curso->id) }}" class="btn btn-default pull-right">Agregar colaborador</input>
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
