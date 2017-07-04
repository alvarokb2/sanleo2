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
                @foreach($subareas as $subarea)
                    <tr>
                        <td>
                            {{$subarea->name}}
                        </td>
                        <td>
                            <a href="{{route('subarea.show', $subarea->id)}}" class="btn btn-default">Ver Indicadores</a>
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
