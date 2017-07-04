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

                </tr>
                </thead>
                <tbody>
                  @php $i = 1;
                  @endphp
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>
                          @if($usuario->rol == 'apoderado')
                            {{$usuario->name}}
                        </td>

                        <td>
                            @endif
                        </td>
                        <td>
                            <input type="radio" id="seleccion" name="seleccion" value="{{$i}}" />
                        </td>
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
