<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <table class="table table-condensed table-bordered">
                <thead>
                <tr>
                    <th>
                        Año
                    </th>
                    <th>
                        Semestre
                    </th>
                    <th>
                        Acción
                    </th>


                </tr>
                </thead>
                <tbody>

                @foreach($informes as $informe)
                    <tr>
                        <td>
                            {{$informe->year}}
                        </td>
                        <td>
                            {{$informe->periodo}}
                        </td>

                        <td>
                            <a href="#" class="btn btn-default">Contestar</a>
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
