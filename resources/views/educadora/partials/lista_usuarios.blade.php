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

                @foreach($usuarios as $usuario)
                    <tr>
                        <td>
                          @if($usuario->rol == 'apoderado')
                            {{$usuario->name}}
                        </td>

                        <td>

                        </td>


                          <a href="{{ route('home') }}" class="btn btn-default pull-right">Añadir</a>

                          <td>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $usuario->id]]) !!}
                              {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                              {!! Form::close() !!}
                          </td>
                              @endif
                    </tr>



                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
