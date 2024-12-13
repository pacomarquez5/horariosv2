@extends('plantillas.plantilla')

@section('contenido')
<h1>LISTADO DE PUESTOS</h1>
<div class="container">
    <a href="{{ route('puestos.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Puesto</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($puestos as $puesto)
            <tr>
                <td>{{ $puesto->idPuesto }}</td>
                <td>{{ $puesto->nombre }}</td>
                <td>{{ $puesto->tipo }}</td>
                <td>
                    <a href="{{ route('puestos.edit', $puesto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('puestos.destroy', $puesto->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este puesto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    {{ $puestos->links() }}
</div>
@endsection
