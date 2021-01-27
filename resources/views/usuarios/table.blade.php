<div class="table-responsive">
    <table class="table" id="choferes-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Cuenta</th>
            <th>Nombre Completo</th>
            <th>Carnet</th>
            <th>Rol</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $usuario->cuenta }}</td>
                <td>{{ $usuario->nombre }} {{ $usuario->apellido }}</td>
                <td>{{ $usuario->ci }}</td>
                <td>{{ $usuario->rol }}</td>
                <td>
                    <div class='btn-group'>
                        @if($usuario->alta)

                            <a href="{{ route('usuarios.show', [$usuario->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>

                            <a href="{{ route('usuarios.edit', [$usuario->id]) }}" class='btn btn-warning btn-xs'><i
                                    class="glyphicon glyphicon-edit" title="Editar"></i></a>

                            <a href="{{ route('usuarios.cambiarEstado', ['id' => $usuario->id, 'estado' => '0'])}}"
                               class="btn btn-danger btn-xs" title="Dar Baja">
                                <i class="glyphicon glyphicon-arrow-down"></i>
                            </a>
                        @else
                            <a href="{{ route('usuarios.cambiarEstado', ['id' => $usuario->id, 'estado' => '1'])}}"
                               class="btn btn-success btn-xs" title="Dar Alta">
                                <i class="glyphicon glyphicon-arrow-up"></i>
                            </a>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
