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
                            <a href="{{route('area.show', $area->id)}}" class="btn btn-default">Sub Áreas</a>
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
