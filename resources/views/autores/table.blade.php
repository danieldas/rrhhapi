<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>Nombre Completo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($autores as $autor)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $autor->nombre }}</td>

                <td>
                    <div class='btn-group'>

                            <a href="{{ route('autores.show', [$autor->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open" title="Detalle"></i> </a>

                            <a href="{{ route('autores.edit', [$autor->id]) }}" class='btn btn-warning btn-xs'><i
                                    class="glyphicon glyphicon-edit" title="Editar"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
