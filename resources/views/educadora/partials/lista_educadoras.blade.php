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
                    @if(Auth::user() != $usuario)
                        <tr>
                            <td>
                                {{$usuario->name}}
                            </td>
                            <td>
                            <td>
                                <a href="{{ route('set_educadora', $usuario->id) }}"
                                   class="btn btn-default pull-right">Añadir</a>
                            </td>
                            </td>

                        </tr>
                    @endif
                @endforeach


                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
