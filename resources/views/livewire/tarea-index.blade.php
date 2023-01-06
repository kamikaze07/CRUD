<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text name="" placeholder="Buscar..." class="form-control" wire:model="busqueda">
        </div>
    </div>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Finalizada
                </th>
                <th>
                    Fecha Limite
                </th>
                <th>
                    Urgencia
                </th>
                <th>
                    Descripción
                </th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->nombre }}
                    </td>
                    <td>
                        {{ $tarea->estaFinalizada() }}
                    </td>
                    <td>
                        {{ $tarea->fecha_limite->format('H:i d/m/Y') }}
                    </td>
                    <td>
                        {{ $tarea->urgencia() }}
                    </td>
                    <td>
                        {{ $tarea->descripcion }}
                    </td>
                    <td>
                        <a href="{{ route('tarea.edit',$tarea) }}">Editar</a>
                        <a href="{{ route('tarea.show',$tarea) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
