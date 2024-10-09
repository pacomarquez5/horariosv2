    <!--  @ dd($alumnos) MOSTRAR TODOS LOS DATOS EN UNA COLECCION-->

    <a class="btn btn-danger" href="{{route("puestos.create")}}">Nuevo</a>
    <hr>

    <div
        class="table-responsive-sm"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>Tipo</th>
                    <th>Puesto</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @foreach ($puestos as $puesto)
                <tr class="table-primary">
                <td scope="row">{{ $puesto->id}}</td>
                <td>{{ $puesto->nombre}}</td>
               <td>{{ $puesto->Tipo}}</td>
              <td>{{ $puesto->Puesto}}</td>
              <td><a class="btn btn-dark" href="{{ route('puestos.edit', $puesto->id) }}">Editar</a></td>
              <td><a class="btn btn-danger" href="{{ route ("puestos.show", $puesto->id)}}">Eliminar</a></td>
              <td><a class="btn btn-outline-dark" href="{{ route( 'puestos.show', $puesto->id)}}">Ver</a></td>
                    </tr>   
                @endforeach
                
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{ $puestos->links() }}
    </div>