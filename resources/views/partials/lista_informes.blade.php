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
                        Periodo
                    </th>
                    <th>
                        Acciones
                    </th>

                </tr>
                </thead>
                <tbody>
                  @php $i = 1;
                  @endphp
                @foreach($informes as $informe)
                    <tr>
                        <td>
                            {{$informe->year}}
                        </td>
                        <td>
                            {{$informe->periodo}}
                        </td>
                        <td>
                            <a href="{{route('informe.show', $informe->id)}}" class="btn btn-primary">Ver areas</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['informe.destroy', $informe->id]]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>

                        <td>
                            <input type="radio" id="seleccion" name="seleccion" value="{{$i}}" />
                        </td>
                </tr>

                    </tr>
                @endforeach
                @php $i = $i +1;

                @endphp
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
